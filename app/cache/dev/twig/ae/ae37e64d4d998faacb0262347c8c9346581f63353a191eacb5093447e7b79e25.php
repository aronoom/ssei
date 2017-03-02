<?php

/* ZoneBundle:District:supprimer.html.twig */
class __TwigTemplate_e3be0e59ea29c70405940705bd2a745c050a1200d7a0150f641a36ef2ad83b14 extends Twig_Template
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
        $__internal_ce01f15c2679c455b653af2c897296a8ddf657d611c76131bd8ccb9e2d5af51b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce01f15c2679c455b653af2c897296a8ddf657d611c76131bd8ccb9e2d5af51b->enter($__internal_ce01f15c2679c455b653af2c897296a8ddf657d611c76131bd8ccb9e2d5af51b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZoneBundle:District:supprimer.html.twig"));

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
        echo "<form class=\"formulaire\" novalidate  method=\"post\" >
    <div class=\"well\">
        <h3>Confirmation</h3>
        <data id=\"idSupDistrict\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["district"]) ? $context["district"] : $this->getContext($context, "district")), "id", array()), "html", null, true);
        echo "\"/>
        <p>Vouler vous supprimer la district ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["district"]) ? $context["district"] : $this->getContext($context, "district")), "districtLibelle", array()), "html", null, true);
        echo "</p>

    </div>
    <div class=\"item form-group modal-footer\">
        <div class=\"pull-right\">
            <button class=\"btn btn-danger\" enabled=false id=\"sub\" type=\"submit\">Supprimer</button>
            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
        </div>
    </div>
</form>
<script type=\"text/javascript\">
    \$(function(){
        \$('.formulaire').submit( function(event) {
            event.preventDefault();
            var \$this = \$(this);
            var submit = true;

            if (!validator.checkAll(\$(this))) {
                submit = false;
            }

            if (submit)
            {
                \$.ajax({
                    url: Routing.generate('zone_supprimer_district', {'id': \$('#idSupDistrict').val()}),
                    type: \$this.attr('method'),
                    data: new FormData( \$this[0] ),
                    processData: false,
                    contentType: false,
                    statusCode: {
                        200: function(response) {
                            \$(\"#globModal\").modal('hide');
                            \$('#selectionDistrictObligatoire').hide();
                            \$.ajax({
                                type: 'GET',
                                url: Routing.generate('zone_lister_district', {'region_id': \$('#regionId').val()}),
                                timeout: 3000,
                                success: function(data) {
                                    \$('#liste_district').children().remove();
                                    \$('#liste_district').append(data);
                                },
                                error: function() {
                                    console.log('La requête n\\'a pas abouti');
                                }
                            });
                        },
                        412: function(response) {
                            var errorsForm = response.responseJSON ;
                            console.log(errorsForm);
                            \$('#globModal .modal-body').children().remove();
                            \$('#globModal .modal-body').append(errorsForm.form);
                            \$('#globModal .modal-body').append(errorsForm.formErrors);
                        },
                        500: function(response) {
                            \$('.modal-body').children().remove();
                            \$('.modal-body').append(response.responseText.form);
                        }
                    }
                });
            };
        });

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
        
        $__internal_ce01f15c2679c455b653af2c897296a8ddf657d611c76131bd8ccb9e2d5af51b->leave($__internal_ce01f15c2679c455b653af2c897296a8ddf657d611c76131bd8ccb9e2d5af51b_prof);

    }

    public function getTemplateName()
    {
        return "ZoneBundle:District:supprimer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 13,  48 => 12,  43 => 9,  33 => 5,  29 => 3,  24 => 2,  22 => 1,);
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
<form class=\"formulaire\" novalidate  method=\"post\" >
    <div class=\"well\">
        <h3>Confirmation</h3>
        <data id=\"idSupDistrict\" value=\"{{ district.id }}\"/>
        <p>Vouler vous supprimer la district {{ district.districtLibelle }}</p>

    </div>
    <div class=\"item form-group modal-footer\">
        <div class=\"pull-right\">
            <button class=\"btn btn-danger\" enabled=false id=\"sub\" type=\"submit\">Supprimer</button>
            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
        </div>
    </div>
</form>
<script type=\"text/javascript\">
    \$(function(){
        \$('.formulaire').submit( function(event) {
            event.preventDefault();
            var \$this = \$(this);
            var submit = true;

            if (!validator.checkAll(\$(this))) {
                submit = false;
            }

            if (submit)
            {
                \$.ajax({
                    url: Routing.generate('zone_supprimer_district', {'id': \$('#idSupDistrict').val()}),
                    type: \$this.attr('method'),
                    data: new FormData( \$this[0] ),
                    processData: false,
                    contentType: false,
                    statusCode: {
                        200: function(response) {
                            \$(\"#globModal\").modal('hide');
                            \$('#selectionDistrictObligatoire').hide();
                            \$.ajax({
                                type: 'GET',
                                url: Routing.generate('zone_lister_district', {'region_id': \$('#regionId').val()}),
                                timeout: 3000,
                                success: function(data) {
                                    \$('#liste_district').children().remove();
                                    \$('#liste_district').append(data);
                                },
                                error: function() {
                                    console.log('La requête n\\'a pas abouti');
                                }
                            });
                        },
                        412: function(response) {
                            var errorsForm = response.responseJSON ;
                            console.log(errorsForm);
                            \$('#globModal .modal-body').children().remove();
                            \$('#globModal .modal-body').append(errorsForm.form);
                            \$('#globModal .modal-body').append(errorsForm.formErrors);
                        },
                        500: function(response) {
                            \$('.modal-body').children().remove();
                            \$('.modal-body').append(response.responseText.form);
                        }
                    }
                });
            };
        });

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
", "ZoneBundle:District:supprimer.html.twig", "/opt/lampp/htdocs/ssei/src/ZoneBundle/Resources/views/District/supprimer.html.twig");
    }
}
