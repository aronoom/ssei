<?php

/* ZoneBundle:District:modifier.html.twig */
class __TwigTemplate_f5700df83f623865ed8b45d25076fa4da186ed38eb43fbf04c486c3f1aea4e31 extends Twig_Template
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
        $__internal_3fceaf4935e41ebcdd12b80fd6f09d9f09b4cf196a57368cde5e755d84731040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fceaf4935e41ebcdd12b80fd6f09d9f09b4cf196a57368cde5e755d84731040->enter($__internal_3fceaf4935e41ebcdd12b80fd6f09d9f09b4cf196a57368cde5e755d84731040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZoneBundle:District:modifier.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_modifier_district", array("region_id" => (isset($context["region_id"]) ? $context["region_id"] : $this->getContext($context, "region_id")), "id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" novalidate  method=\"post\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    <div class=\"modal-body\">
        <div class=\"well\">
            <div class=\"item form-group\">
                <div class=\"control-label col-md-3\">
                    ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "districtLibelle", array()), 'label', array("label" => "Nom du district"));
        echo "
                </div>
                <div class=\"col-sm-6\">
                    <li >
                        ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "districtLibelle", array()), 'widget', array("attr" => array("required" => "true", "class" => "form-control", "autocomplete" => "off")));
        echo "
                    </li>
                </div>
                <ul class=\"parsley-errors-list filled\">
                    <li class=\"parsley-required red\">
                        ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "districtLibelle", array()), 'errors');
        echo "
                    </li>
                </ul>
            </div>
            <br><br>

            <div class=\"item form-group\">
                <div class=\"control-label col-md-3\">
                    ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "districtCode", array()), 'label', array("label" => "Code du district"));
        echo "
                </div>
                <div class=\"col-sm-6\">
                    <li >
                        ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "districtCode", array()), 'widget', array("attr" => array("required" => "true", "class" => "form-control", "autocomplete" => "off")));
        echo "
                    </li>
                </div>
                <ul class=\"parsley-errors-list filled\">
                    <li class=\"parsley-required red\">
                        ";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "districtCode", array()), 'errors');
        echo "
                    </li>
                </ul>
            </div>
            <br><br>
            ";
        // line 45
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
        
        $__internal_3fceaf4935e41ebcdd12b80fd6f09d9f09b4cf196a57368cde5e755d84731040->leave($__internal_3fceaf4935e41ebcdd12b80fd6f09d9f09b4cf196a57368cde5e755d84731040_prof);

    }

    public function getTemplateName()
    {
        return "ZoneBundle:District:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 45,  95 => 40,  87 => 35,  80 => 31,  69 => 23,  61 => 18,  54 => 14,  43 => 9,  33 => 5,  29 => 3,  24 => 2,  22 => 1,);
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
<form class=\"formulaire\" action=\"{{ path('zone_modifier_district', {'region_id': region_id, 'id': id}) }}\" novalidate  method=\"post\" {{ form_enctype(form) }}>
    <div class=\"modal-body\">
        <div class=\"well\">
            <div class=\"item form-group\">
                <div class=\"control-label col-md-3\">
                    {{ form_label(form.districtLibelle,\"Nom du district\")}}
                </div>
                <div class=\"col-sm-6\">
                    <li >
                        {{form_widget(form.districtLibelle,{'attr':{'required':'true','class':'form-control','autocomplete':'off'}})}}
                    </li>
                </div>
                <ul class=\"parsley-errors-list filled\">
                    <li class=\"parsley-required red\">
                        {{form_errors(form.districtLibelle)}}
                    </li>
                </ul>
            </div>
            <br><br>

            <div class=\"item form-group\">
                <div class=\"control-label col-md-3\">
                    {{ form_label(form.districtCode,\"Code du district\")}}
                </div>
                <div class=\"col-sm-6\">
                    <li >
                        {{form_widget(form.districtCode,{'attr':{'required':'true','class':'form-control','autocomplete':'off'}})}}
                    </li>
                </div>
                <ul class=\"parsley-errors-list filled\">
                    <li class=\"parsley-required red\">
                        {{form_errors(form.districtCode)}}
                    </li>
                </ul>
            </div>
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
", "ZoneBundle:District:modifier.html.twig", "/opt/lampp/htdocs/ssei/src/ZoneBundle/Resources/views/District/modifier.html.twig");
    }
}
