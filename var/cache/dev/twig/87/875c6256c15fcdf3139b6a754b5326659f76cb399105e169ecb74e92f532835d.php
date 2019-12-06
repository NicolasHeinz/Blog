<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Home/Perfil/home_perfil.html.twig */
class __TwigTemplate_2de4ac59dcefe60da88e2cbe6a2040ee4f2d5c61cc9eea631fcbbf07597dccfb extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@Home/Default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Home/Perfil/home_perfil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Home/Perfil/home_perfil.html.twig"));

        $this->parent = $this->loadTemplate("@Home/Default/index.html.twig", "@Home/Perfil/home_perfil.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <div class=\"col-md-6 offset-md-3 text-center\">
        <h1 class=\"text-center\"><span class=\"badge badge-primary\">Mis Posts</span></h1>
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entradas"] ?? $this->getContext($context, "entradas")));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 8
            echo "            <div class=\"card mt-3\">
                <div class=\"card-body\">
                    <h5 class=\"card-tittle\">
                        <h3><span class=\"badge badge-light card\">";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "titulo", []), "html", null, true);
            echo "</span></h3>
                    </h5>
                    <p class=\"card-text\">
                        ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "cuerpo", []), "html", null, true);
            echo "
                    </p>

                    <button  class=\"btn btn-success btn-editar\" data-entrada=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "id", []), "html", null, true);
            echo "\" data-titulo=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "titulo", []), "html", null, true);
            echo "\" data-cuerpo=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "cuerpo", []), "html", null, true);
            echo "\"
                             data-toggle=\"modal\" data-target=\"#modalEditar\">
                        Editar</button>

                    <button class=\"btn btn-danger btn-eliminar\" data-entrada=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "id", []), "html", null, true);
            echo "\" data-toggle=\"modal\" data-target=\"#modalEditar\" >Eliminar</button>

                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </div>


    <!-- Modal Editar/Eliminar-->
    <div class=\"modal fade\" id=\"modalEditar\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h4 class=\"modal-title\" id=\"exampleModalLabel\"><span class=\"badge badge-light\">Editar Entrada</span></h4>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <form action=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entrada_edit");
        echo "\" method=\"post\" id=\"form-entrada\">
                    <div class=\"modal-body\">

                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"submit\" class=\"btn btn-success btn-ok\">Guardar</button>
                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Salir</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 55
        echo "    <script>
        \$(document).ready(function() {

            \$(\".btn-editar\").click(function() {

                \$(\".modal-title .badge\").text(\"Editar Entrada\");
                \$(\".modal-body\").empty();
                \$(\".modal-body\").append('";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formEntrada"] ?? $this->getContext($context, "formEntrada")), "titulo", []), 'label');
        echo "');
                \$(\".modal-body\").append('";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formEntrada"] ?? $this->getContext($context, "formEntrada")), "titulo", []), 'widget');
        echo "');
                \$(\".modal-body\").append('";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formEntrada"] ?? $this->getContext($context, "formEntrada")), "cuerpo", []), 'label');
        echo "');
                \$(\".modal-body\").append('";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formEntrada"] ?? $this->getContext($context, "formEntrada")), "cuerpo", []), 'widget');
        echo "');
                \$(\".modal-body\").append('<input type=\"hidden\" id=\"id\" name=\"_id_entrada\" value=\"'+\$(this).data('entrada')+'\">');
                \$(\".btn-ok\").html('Guardar');

                \$(\"#entradabundle_entrada_titulo\").val(\$(this).data('titulo'));
                \$(\"#entradabundle_entrada_cuerpo\").val(\$(this).data('cuerpo'));

            });

            \$(\".btn-eliminar\").click(function() {

                \$(\"#form-entrada\").attr('action','/delet');
                \$(\".modal-title .badge\").text(\"Eliminar Entrada\");
                \$(\".modal-body\").empty();
                \$(\".modal-body\").append(\"<p> ¿Esta Seguro de Eliminar Esta Entrada?</p>\");
                \$(\".modal-body\").append(\"<input type=\\\"hidden\\\" id=\\\"id_eliminar\\\" name=\\\"_id-eliminar\\\">\");

                \$(\".btn-ok\").html('Confirmar');

                \$(\"#id_eliminar\").val(\$(this).data('entrada'));
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Home/Perfil/home_perfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 65,  174 => 64,  170 => 63,  166 => 62,  157 => 55,  148 => 54,  124 => 39,  109 => 26,  98 => 21,  87 => 17,  81 => 14,  75 => 11,  70 => 8,  66 => 7,  61 => 4,  52 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Home/Default/index.html.twig' %}

{% block content %}

    <div class=\"col-md-6 offset-md-3 text-center\">
        <h1 class=\"text-center\"><span class=\"badge badge-primary\">Mis Posts</span></h1>
        {% for e in entradas %}
            <div class=\"card mt-3\">
                <div class=\"card-body\">
                    <h5 class=\"card-tittle\">
                        <h3><span class=\"badge badge-light card\">{{ e.titulo }}</span></h3>
                    </h5>
                    <p class=\"card-text\">
                        {{ e.cuerpo }}
                    </p>

                    <button  class=\"btn btn-success btn-editar\" data-entrada=\"{{ e.id }}\" data-titulo=\"{{ e.titulo }}\" data-cuerpo=\"{{ e.cuerpo }}\"
                             data-toggle=\"modal\" data-target=\"#modalEditar\">
                        Editar</button>

                    <button class=\"btn btn-danger btn-eliminar\" data-entrada=\"{{ e.id }}\" data-toggle=\"modal\" data-target=\"#modalEditar\" >Eliminar</button>

                </div>
            </div>
        {% endfor %}
    </div>


    <!-- Modal Editar/Eliminar-->
    <div class=\"modal fade\" id=\"modalEditar\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h4 class=\"modal-title\" id=\"exampleModalLabel\"><span class=\"badge badge-light\">Editar Entrada</span></h4>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <form action=\"{{ path('entrada_edit') }}\" method=\"post\" id=\"form-entrada\">
                    <div class=\"modal-body\">

                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"submit\" class=\"btn btn-success btn-ok\">Guardar</button>
                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Salir</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

{% endblock %}

{% block javascripts %}
    <script>
        \$(document).ready(function() {

            \$(\".btn-editar\").click(function() {

                \$(\".modal-title .badge\").text(\"Editar Entrada\");
                \$(\".modal-body\").empty();
                \$(\".modal-body\").append('{{ form_label(formEntrada.titulo) }}');
                \$(\".modal-body\").append('{{ form_widget(formEntrada.titulo) }}');
                \$(\".modal-body\").append('{{ form_label(formEntrada.cuerpo) }}');
                \$(\".modal-body\").append('{{ form_widget(formEntrada.cuerpo) }}');
                \$(\".modal-body\").append('<input type=\"hidden\" id=\"id\" name=\"_id_entrada\" value=\"'+\$(this).data('entrada')+'\">');
                \$(\".btn-ok\").html('Guardar');

                \$(\"#entradabundle_entrada_titulo\").val(\$(this).data('titulo'));
                \$(\"#entradabundle_entrada_cuerpo\").val(\$(this).data('cuerpo'));

            });

            \$(\".btn-eliminar\").click(function() {

                \$(\"#form-entrada\").attr('action','/delet');
                \$(\".modal-title .badge\").text(\"Eliminar Entrada\");
                \$(\".modal-body\").empty();
                \$(\".modal-body\").append(\"<p> ¿Esta Seguro de Eliminar Esta Entrada?</p>\");
                \$(\".modal-body\").append(\"<input type=\\\"hidden\\\" id=\\\"id_eliminar\\\" name=\\\"_id-eliminar\\\">\");

                \$(\".btn-ok\").html('Confirmar');

                \$(\"#id_eliminar\").val(\$(this).data('entrada'));
            });
        });
    </script>
{% endblock %}", "@Home/Perfil/home_perfil.html.twig", "/home/nicolas/blog/src/HomeBundle/Resources/views/Perfil/home_perfil.html.twig");
    }
}
