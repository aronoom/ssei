<?php

/* ZoneBundle:District:lister.html.twig */
class __TwigTemplate_f1964a605bb3d6e917039858de507a9112b47ad69743e8d326bec18b2944e38c extends Twig_Template
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
        $__internal_42238e0a2abb6a9916dcb0f03685d76db61e8e45d0bc36ffcb0054a7fc225911 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42238e0a2abb6a9916dcb0f03685d76db61e8e45d0bc36ffcb0054a7fc225911->enter($__internal_42238e0a2abb6a9916dcb0f03685d76db61e8e45d0bc36ffcb0054a7fc225911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZoneBundle:District:lister.html.twig"));

        // line 1
        echo "<data id=\"regionId\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["region_id"]) ? $context["region_id"] : $this->getContext($context, "region_id")), "html", null, true);
        echo "\"/>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["districts"]) ? $context["districts"] : $this->getContext($context, "districts")));
        foreach ($context['_seq'] as $context["_key"] => $context["district"]) {
            // line 3
            echo "    <li value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["district"], "id", array()), "html", null, true);
            echo "\">
        ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["district"], "districtLibelle", array()), "html", null, true);
            echo "
        ";
            // line 6
            echo "    </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['district'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
<script>
        var currentDistrictId;

        \$('#selectionDistrictObligatoire').hide();
        \$('#ajouterCommune').hide();
        \$('#selectionCommuneObligatoire').hide();

        \$('#liste_district li').click(function(){
            \$('#liste_district li').css('background-color', 'transparent').css('color', '#73879C');
            \$(this).css('background-color', '#0D3349').css('color', 'white')

            currentDistrictId = \$(this).val();

            \$('#selectionDistrictObligatoire').show();
            \$('#ajouterCommune').show();
            \$('#liste_commune').show();

            // Lister les communes de ce district
            \$.ajax({
                type: 'GET',
                url: Routing.generate('zone_lister_commune', {'district_id': currentDistrictId}),
                timeout: 3000,
                success: function(data) {
                    \$('#liste_commune').children().remove();
                    \$('#liste_commune').append(data);
                },
                error: function() {
                    console.log('La requête n\\'a pas abouti');
                }
            });
        });

        \$('#supprimerDistrict').click(function(){
            \$('.modal-dialog').removeClass('modal-lg');
            \$('.modal-dialog').addClass('modal-md');
            \$.ajax({
                type: 'GET',
                url: Routing.generate('zone_supprimer_district', {'id': currentDistrictId}),
                timeout: 3000,
                success: function(data) {
                    \$('.modal-body').children().remove();
                    \$('.modal-body').append(data);
                    \$('.modal-header h4').text(\"Supprimer un district\");
                    \$('#globModal').modal('show');
                },
                error: function() {
                    console.log('La requête n\\'a pas abouti');
                }
            });
        });

        \$('#modifierDistrict').click(function(){
            \$('.modal-dialog').removeClass('modal-md');
            \$('.modal-dialog').addClass('modal-lg');
            \$.ajax({
                type: 'GET',
                url: Routing.generate('zone_modifier_district', {'id': currentDistrictId}),
                timeout: 3000,
                success: function(data) {
                    \$('.modal-body').children().remove();
                    \$('.modal-body').append(data);
                    \$('.modal-header h4').text(\"Modifier un district\");
                    \$('#globModal').modal('show');
                },
                error: function() {
                    console.log('La requête n\\'a pas abouti');
                }
            });
        });
</script>";
        
        $__internal_42238e0a2abb6a9916dcb0f03685d76db61e8e45d0bc36ffcb0054a7fc225911->leave($__internal_42238e0a2abb6a9916dcb0f03685d76db61e8e45d0bc36ffcb0054a7fc225911_prof);

    }

    public function getTemplateName()
    {
        return "ZoneBundle:District:lister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  40 => 6,  36 => 4,  31 => 3,  27 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<data id=\"regionId\" value=\"{{ region_id }}\"/>
{% for district in districts %}
    <li value=\"{{ district.id }}\">
        {{ district.districtLibelle }}
        {#<i style=\"padding-top: 5px\" class=\"fa fa-chevron-right pull-right\"></i>#}
    </li>
    {#  #}
{% endfor %}

<script>
        var currentDistrictId;

        \$('#selectionDistrictObligatoire').hide();
        \$('#ajouterCommune').hide();
        \$('#selectionCommuneObligatoire').hide();

        \$('#liste_district li').click(function(){
            \$('#liste_district li').css('background-color', 'transparent').css('color', '#73879C');
            \$(this).css('background-color', '#0D3349').css('color', 'white')

            currentDistrictId = \$(this).val();

            \$('#selectionDistrictObligatoire').show();
            \$('#ajouterCommune').show();
            \$('#liste_commune').show();

            // Lister les communes de ce district
            \$.ajax({
                type: 'GET',
                url: Routing.generate('zone_lister_commune', {'district_id': currentDistrictId}),
                timeout: 3000,
                success: function(data) {
                    \$('#liste_commune').children().remove();
                    \$('#liste_commune').append(data);
                },
                error: function() {
                    console.log('La requête n\\'a pas abouti');
                }
            });
        });

        \$('#supprimerDistrict').click(function(){
            \$('.modal-dialog').removeClass('modal-lg');
            \$('.modal-dialog').addClass('modal-md');
            \$.ajax({
                type: 'GET',
                url: Routing.generate('zone_supprimer_district', {'id': currentDistrictId}),
                timeout: 3000,
                success: function(data) {
                    \$('.modal-body').children().remove();
                    \$('.modal-body').append(data);
                    \$('.modal-header h4').text(\"Supprimer un district\");
                    \$('#globModal').modal('show');
                },
                error: function() {
                    console.log('La requête n\\'a pas abouti');
                }
            });
        });

        \$('#modifierDistrict').click(function(){
            \$('.modal-dialog').removeClass('modal-md');
            \$('.modal-dialog').addClass('modal-lg');
            \$.ajax({
                type: 'GET',
                url: Routing.generate('zone_modifier_district', {'id': currentDistrictId}),
                timeout: 3000,
                success: function(data) {
                    \$('.modal-body').children().remove();
                    \$('.modal-body').append(data);
                    \$('.modal-header h4').text(\"Modifier un district\");
                    \$('#globModal').modal('show');
                },
                error: function() {
                    console.log('La requête n\\'a pas abouti');
                }
            });
        });
</script>", "ZoneBundle:District:lister.html.twig", "/opt/lampp/htdocs/ssei/src/ZoneBundle/Resources/views/District/lister.html.twig");
    }
}
