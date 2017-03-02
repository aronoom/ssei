<?php

/* IndicateurBundle:Periodicite:modifier.html.twig */
class __TwigTemplate_978b0cbcda5fb6d02a0f1b61688c5acb7802c02cb9d5117bf8ffd517cbbf3339 extends Twig_Template
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
        $__internal_fef8591f47650042e729a5fdcf29d713f34cb31103321f9e4dd061ef333826fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fef8591f47650042e729a5fdcf29d713f34cb31103321f9e4dd061ef333826fb->enter($__internal_fef8591f47650042e729a5fdcf29d713f34cb31103321f9e4dd061ef333826fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IndicateurBundle:Periodicite:modifier.html.twig"));

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
        echo "<form class=\"formulaire\" method=\"post\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " novalidate>
    <div class=\"well\">
        <div class=\"item form-group\">
            <div class=\"control-label col-md-3\">
                ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libellePeriodicite", array()), 'label', array("label" => "Libelle"));
        echo "
            </div>
            <div class=\"col-sm-6\">
                <li >
                    ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libellePeriodicite", array()), 'widget', array("attr" => array("required" => "required", "class" => "form-control", "autocomplete" => "off")));
        echo "
                </li>
            </div>
            <ul class=\"parsley-errors-list filled\">
                <li >
                    ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libellePeriodicite", array()), 'errors');
        echo "
                </li>
            </ul>
        </div>
        <br><br>
        ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    </div>
    <div class=\"item form-group modal-footer\">
        <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
            <button class=\"btn btn-primary\" enabled=false id=\"sub\" type=\"submit\">Modifier</button>
            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
        </div>
    </div>
</form>
<script type=\"text/javascript\">
    \$('.formulaire').submit( function(event) {
        event.preventDefault();
        var \$this = \$(this);
        var submit = true;

        if (!validator.checkAll(\$(this))) {
            submit = false;
        }

        if (submit)
        {
            var \$this = \$(this);
            var formData = new FormData( \$this[0] );
            var \$id = \$('.modal-header').attr('data-id');
            \$.ajax({
                url: Routing.generate('periodicite_modifier',{ id : \$id }),
                method : \"POST\",
                data : formData,
                processData: false,
                contentType: false,
                statusCode: {
                    200: function(response) {
                        \$(\"#globModal\").modal('hide');
                        \$('#indicateurTable').dataTable().fnReloadAjax();
                    },
                    412: function(response) {
                        var errorsForm = response.responseJSON ;
                        \$.each(errorsForm,function(cle,val){
                        })
                        \$('.modal-body').children().remove();
                        \$('.modal-body').append(errorsForm.formErrors);

                    },
                    500: function(response) {
                     //   alert(response.error);
                    }
                }
            });
            scope = null;
        }
    });
</script>
<script>
    // initialize the validator function
    validator.message.date = 'not a real date';

    // validate a field on \"blur\" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
    \$('.formulaire')
            .on('blur', 'input[required], input.optional, select.required', validator.checkField)
            .on('change', 'select.required', validator.checkField)
            .on('keypress', 'input[required][pattern]', validator.keypress);

    \$('.multi.required').on('keyup blur', 'input', function() {
        validator.checkField.apply(\$(this).siblings().last()[0]);
    });

</script>
";
        
        $__internal_fef8591f47650042e729a5fdcf29d713f34cb31103321f9e4dd061ef333826fb->leave($__internal_fef8591f47650042e729a5fdcf29d713f34cb31103321f9e4dd061ef333826fb_prof);

    }

    public function getTemplateName()
    {
        return "IndicateurBundle:Periodicite:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 27,  66 => 22,  58 => 17,  51 => 13,  43 => 9,  33 => 5,  29 => 3,  24 => 2,  22 => 1,);
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
<form class=\"formulaire\" method=\"post\" {{ form_enctype(form) }} novalidate>
    <div class=\"well\">
        <div class=\"item form-group\">
            <div class=\"control-label col-md-3\">
                {{ form_label(form.libellePeriodicite,\"Libelle\")}}
            </div>
            <div class=\"col-sm-6\">
                <li >
                    {{form_widget(form.libellePeriodicite,{'attr':{'required':'required','class':'form-control','autocomplete':'off'}})}}
                </li>
            </div>
            <ul class=\"parsley-errors-list filled\">
                <li >
                    {{form_errors(form.libellePeriodicite)}}
                </li>
            </ul>
        </div>
        <br><br>
        {{form_rest(form)}}
    </div>
    <div class=\"item form-group modal-footer\">
        <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
            <button class=\"btn btn-primary\" enabled=false id=\"sub\" type=\"submit\">Modifier</button>
            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
        </div>
    </div>
</form>
<script type=\"text/javascript\">
    \$('.formulaire').submit( function(event) {
        event.preventDefault();
        var \$this = \$(this);
        var submit = true;

        if (!validator.checkAll(\$(this))) {
            submit = false;
        }

        if (submit)
        {
            var \$this = \$(this);
            var formData = new FormData( \$this[0] );
            var \$id = \$('.modal-header').attr('data-id');
            \$.ajax({
                url: Routing.generate('periodicite_modifier',{ id : \$id }),
                method : \"POST\",
                data : formData,
                processData: false,
                contentType: false,
                statusCode: {
                    200: function(response) {
                        \$(\"#globModal\").modal('hide');
                        \$('#indicateurTable').dataTable().fnReloadAjax();
                    },
                    412: function(response) {
                        var errorsForm = response.responseJSON ;
                        \$.each(errorsForm,function(cle,val){
                        })
                        \$('.modal-body').children().remove();
                        \$('.modal-body').append(errorsForm.formErrors);

                    },
                    500: function(response) {
                     //   alert(response.error);
                    }
                }
            });
            scope = null;
        }
    });
</script>
<script>
    // initialize the validator function
    validator.message.date = 'not a real date';

    // validate a field on \"blur\" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
    \$('.formulaire')
            .on('blur', 'input[required], input.optional, select.required', validator.checkField)
            .on('change', 'select.required', validator.checkField)
            .on('keypress', 'input[required][pattern]', validator.keypress);

    \$('.multi.required').on('keyup blur', 'input', function() {
        validator.checkField.apply(\$(this).siblings().last()[0]);
    });

</script>
", "IndicateurBundle:Periodicite:modifier.html.twig", "/opt/lampp/htdocs/ssei/src/Proc/IndicateurBundle/Resources/views/Periodicite/modifier.html.twig");
    }
}
