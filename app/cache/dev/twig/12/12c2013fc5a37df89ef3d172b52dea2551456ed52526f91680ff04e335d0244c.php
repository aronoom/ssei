<?php

/* UserBundle:User:liste.html.twig */
class __TwigTemplate_fed3d72c00a0392cdc3e8a8ce1f8eb1d900c6c7753a5ee025a890daf3c306cb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout.html.twig", "UserBundle:User:liste.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3909363f01af58401ef6dde0ff7ec3310396af8a955b58747b977182a1fbfe5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3909363f01af58401ef6dde0ff7ec3310396af8a955b58747b977182a1fbfe5c->enter($__internal_3909363f01af58401ef6dde0ff7ec3310396af8a955b58747b977182a1fbfe5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:liste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3909363f01af58401ef6dde0ff7ec3310396af8a955b58747b977182a1fbfe5c->leave($__internal_3909363f01af58401ef6dde0ff7ec3310396af8a955b58747b977182a1fbfe5c_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_44c26ac67fc234bf3c42246943aee5b17bf3f644d6cb551f894b9e69dc03dfb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44c26ac67fc234bf3c42246943aee5b17bf3f644d6cb551f894b9e69dc03dfb6->enter($__internal_44c26ac67fc234bf3c42246943aee5b17bf3f644d6cb551f894b9e69dc03dfb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Utilisateurs";
        
        $__internal_44c26ac67fc234bf3c42246943aee5b17bf3f644d6cb551f894b9e69dc03dfb6->leave($__internal_44c26ac67fc234bf3c42246943aee5b17bf3f644d6cb551f894b9e69dc03dfb6_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_496f2ce04cd6d3f1c00e250abc1599bc5e45ee5967b03cd3622465da8d85bf42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_496f2ce04cd6d3f1c00e250abc1599bc5e45ee5967b03cd3622465da8d85bf42->enter($__internal_496f2ce04cd6d3f1c00e250abc1599bc5e45ee5967b03cd3622465da8d85bf42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\">    
";
        
        $__internal_496f2ce04cd6d3f1c00e250abc1599bc5e45ee5967b03cd3622465da8d85bf42->leave($__internal_496f2ce04cd6d3f1c00e250abc1599bc5e45ee5967b03cd3622465da8d85bf42_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_2fe8a427ff51ccab17252833fbd94082cd7929d64c95f64cb851603dd9d7eed2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fe8a427ff51ccab17252833fbd94082cd7929d64c95f64cb851603dd9d7eed2->enter($__internal_2fe8a427ff51ccab17252833fbd94082cd7929d64c95f64cb851603dd9d7eed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "
    <div class=\"page-title\">
        <div class=\"title_left\">
            <h3>Agents</h3>
                <ol class=\"breadcrumb\">
                   <li><a href=\"\">Acceuil</a></li>
                   <li><a >Admnistration</a></li>
                   <li><a href=\"\">Utilisateurs</a></li>
                   <li class=\"active\">Liste des utilisateurs</li>
                </ol>
            </div>
    </div>
    <div class=\"row\">
    <div class=\"col-md-12 col-sm-12 col-xs-12\">
    <div class=\"dashboard_graph\">
        <a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_admin_userAdd");
        echo "\">
            <button class=\"btn btn-primary pull-left\" id=\"ajouterAgent\">Ajouter un utilisateur</button>
        </a>
        <div class=\" x_panel\">
            
            <div class=\"col-sm-12\">
                <table id=\"agentTable\" class=\"table table-responsive table-striped jambo_table bulk_action dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Entité(s)</th>
                            <th>Contact</th>
                            <th>E-mail</th>
                            <th>Adresse</th>
                            <th>Service</th>
                            <th>Fonction</th>
                            <th>Direction</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["agents"]) ? $context["agents"] : $this->getContext($context, "agents")));
        foreach ($context['_seq'] as $context["_key"] => $context["agent"]) {
            // line 46
            echo "                        <tr>
                            <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["agent"], "id", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["agent"], "username", array()), "html", null, true);
            echo "</td>
                            <td data-toggle=\"tooltip\" data-original-title=\"";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["agent"], "entites", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "codeEntite", array()), "html", null, true);
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\">
                            ";
            // line 50
            if (($this->getAttribute($this->getAttribute($context["agent"], "entites", array()), "count", array()) == 0)) {
                echo "Aucun";
            } else {
                echo "Voir";
            }
            // line 51
            echo "                            </td>
                            <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["agent"], "contactAgent", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["agent"], "email", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["agent"], "adresseAgent", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["agent"], "serviceUser", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["agent"], "fonctionUser", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["agent"], "directionUser", array()), "html", null, true);
            echo "</td>
                            <td >
                                <div class=\"btn-group\">
                                    <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_admin_userEdit", array("id" => $this->getAttribute($context["agent"], "id", array()))), "html", null, true);
            echo "\">
                                        <button type=\"button\" class=\"btn btn-default btn-sm\" data-toggle=\"tooltip\" title data-original-title=\"Modifier\" aria-label=\"Center Align\">
                                            <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                                        </button>
                                    </a>
                                    <a title data-original-title=\"Supprimer\" data-toggle=\"tooltip\">
                                        <button type=\"button\" class=\"btn btn-danger btn-sm delete-btn\" aria-label=\"Justify\" data-toggle=\"modal\" data-target=\"#modal";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["agent"], "id", array()), "html", null, true);
            echo "\">
                                            <span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span>
                                        </button>
                                    </a>
                                </div>
                                <!-- -->
                                <div class=\"modal fade bs-example-modal-sm\" data-id=\"\" id=\"modalDelete\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
                                    <div class=\"modal-dialog modal-sm\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                                                </button>
                                                <h4 class=\"modal-title\" id=\"myModalLabel2\">Suppression</h4>
                                            </div>
                                            <div class=\"modal-body\">
                                                <h4>
                                                    <p>Voulez-vous vraiment supprimer?</p>
                                                </h4>
                                            </div>
                                            <div class=\"modal-footer\">
                                                <form action=\"";
            // line 86
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_admin_userDel");
            echo "\" method=\"post\">
                                                    <input type=\"hidden\" id=\"idAgent\" name=\"idAgent\" value=\"\">
                                                    <button type=\"submit\" id=\"modalSuppr\" class=\"btn btn-danger\">Supprimer</button>
                                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- -->
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "                    </tbody>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Entité(s)</th>
                            <th>Contact</th>
                            <th>E-mail</th>
                            <th>Adresse</th>
                            <th>Service</th>
                            <th>Fonction</th>
                            <th>Direction</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>            
            </div>
        </div>
    </div>
    </div>
";
        
        $__internal_2fe8a427ff51ccab17252833fbd94082cd7929d64c95f64cb851603dd9d7eed2->leave($__internal_2fe8a427ff51ccab17252833fbd94082cd7929d64c95f64cb851603dd9d7eed2_prof);

    }

    // line 122
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9ec38ac8608166ecc4ca8fb0f801a77ae9eed6089f15acf7add36a848cca3218 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ec38ac8608166ecc4ca8fb0f801a77ae9eed6089f15acf7add36a848cca3218->enter($__internal_9ec38ac8608166ecc4ca8fb0f801a77ae9eed6089f15acf7add36a848cca3218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 123
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datatables.min.js"), "html", null, true);
        echo "\"></script>  
    <script type=\"text/javascript\" src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap_dropdown_6.js"), "html", null, true);
        echo "\"></script>
    <script>
        var table = \$('#agentTable').DataTable();
        \$(function(){

            \$('.delete-btn').on('click',function(){
                var _this = \$(this);
                var _parent = \$(_this).parents()[3];
                var node = \$(\$(_parent).children()[0]);

                \$('#idAgent').val(\$(node).text());
                \$('#modalDelete').modal('toggle');
            });
        });


    </script>
";
        
        $__internal_9ec38ac8608166ecc4ca8fb0f801a77ae9eed6089f15acf7add36a848cca3218->leave($__internal_9ec38ac8608166ecc4ca8fb0f801a77ae9eed6089f15acf7add36a848cca3218_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:User:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 126,  275 => 125,  271 => 124,  266 => 123,  260 => 122,  232 => 100,  212 => 86,  189 => 66,  180 => 60,  174 => 57,  170 => 56,  166 => 55,  162 => 54,  158 => 53,  154 => 52,  151 => 51,  145 => 50,  133 => 49,  129 => 48,  125 => 47,  122 => 46,  118 => 45,  93 => 23,  76 => 8,  70 => 7,  61 => 5,  56 => 4,  50 => 3,  37 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"UserBundle::layout.html.twig\"%}
{% block title %}{{ parent() }} Utilisateurs{% endblock %}
{% block stylesheets %}
    {{parent()}}
    <link rel=\"stylesheet\" href=\"{{asset('css/dataTables.bootstrap.min.css')}}\">    
{% endblock %}
{% block content %}

    <div class=\"page-title\">
        <div class=\"title_left\">
            <h3>Agents</h3>
                <ol class=\"breadcrumb\">
                   <li><a href=\"\">Acceuil</a></li>
                   <li><a >Admnistration</a></li>
                   <li><a href=\"\">Utilisateurs</a></li>
                   <li class=\"active\">Liste des utilisateurs</li>
                </ol>
            </div>
    </div>
    <div class=\"row\">
    <div class=\"col-md-12 col-sm-12 col-xs-12\">
    <div class=\"dashboard_graph\">
        <a href=\"{{ path('user_admin_userAdd') }}\">
            <button class=\"btn btn-primary pull-left\" id=\"ajouterAgent\">Ajouter un utilisateur</button>
        </a>
        <div class=\" x_panel\">
            
            <div class=\"col-sm-12\">
                <table id=\"agentTable\" class=\"table table-responsive table-striped jambo_table bulk_action dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Entité(s)</th>
                            <th>Contact</th>
                            <th>E-mail</th>
                            <th>Adresse</th>
                            <th>Service</th>
                            <th>Fonction</th>
                            <th>Direction</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    {% for agent in agents %}
                        <tr>
                            <td>{{ agent.id }}</td>
                            <td>{{ agent.username }}</td>
                            <td data-toggle=\"tooltip\" data-original-title=\"{% for entity in agent.entites %}{{ entity.codeEntite }} {% endfor %}\">
                            {% if agent.entites.count ==0 %}Aucun{% else %}Voir{% endif %}
                            </td>
                            <td>{{ agent.contactAgent }}</td>
                            <td>{{ agent.email }}</td>
                            <td>{{ agent.adresseAgent }}</td>
                            <td>{{ agent.serviceUser }}</td>
                            <td>{{ agent.fonctionUser }}</td>
                            <td>{{ agent.directionUser }}</td>
                            <td >
                                <div class=\"btn-group\">
                                    <a href=\"{{ path('user_admin_userEdit',{'id' : agent.id }) }}\">
                                        <button type=\"button\" class=\"btn btn-default btn-sm\" data-toggle=\"tooltip\" title data-original-title=\"Modifier\" aria-label=\"Center Align\">
                                            <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                                        </button>
                                    </a>
                                    <a title data-original-title=\"Supprimer\" data-toggle=\"tooltip\">
                                        <button type=\"button\" class=\"btn btn-danger btn-sm delete-btn\" aria-label=\"Justify\" data-toggle=\"modal\" data-target=\"#modal{{ agent.id }}\">
                                            <span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span>
                                        </button>
                                    </a>
                                </div>
                                <!-- -->
                                <div class=\"modal fade bs-example-modal-sm\" data-id=\"\" id=\"modalDelete\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
                                    <div class=\"modal-dialog modal-sm\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                                                </button>
                                                <h4 class=\"modal-title\" id=\"myModalLabel2\">Suppression</h4>
                                            </div>
                                            <div class=\"modal-body\">
                                                <h4>
                                                    <p>Voulez-vous vraiment supprimer?</p>
                                                </h4>
                                            </div>
                                            <div class=\"modal-footer\">
                                                <form action=\"{{ path('user_admin_userDel') }}\" method=\"post\">
                                                    <input type=\"hidden\" id=\"idAgent\" name=\"idAgent\" value=\"\">
                                                    <button type=\"submit\" id=\"modalSuppr\" class=\"btn btn-danger\">Supprimer</button>
                                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- -->
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Entité(s)</th>
                            <th>Contact</th>
                            <th>E-mail</th>
                            <th>Adresse</th>
                            <th>Service</th>
                            <th>Fonction</th>
                            <th>Direction</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>            
            </div>
        </div>
    </div>
    </div>
{% endblock %}
{% block javascripts %}
    {{parent()}}
    <script type=\"text/javascript\" src=\"{{asset('js/dataTables.bootstrap.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{asset('js/datatables.min.js')}}\"></script>  
    <script type=\"text/javascript\" src=\"{{asset('js/bootstrap_dropdown_6.js')}}\"></script>
    <script>
        var table = \$('#agentTable').DataTable();
        \$(function(){

            \$('.delete-btn').on('click',function(){
                var _this = \$(this);
                var _parent = \$(_this).parents()[3];
                var node = \$(\$(_parent).children()[0]);

                \$('#idAgent').val(\$(node).text());
                \$('#modalDelete').modal('toggle');
            });
        });


    </script>
{% endblock %}
", "UserBundle:User:liste.html.twig", "/opt/lampp/htdocs/ssei/src/Proc/UserBundle/Resources/views/User/liste.html.twig");
    }
}
