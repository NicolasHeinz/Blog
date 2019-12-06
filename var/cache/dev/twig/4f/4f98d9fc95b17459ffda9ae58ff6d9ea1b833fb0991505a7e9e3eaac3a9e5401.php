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

/* @Home/Default/index.html.twig */
class __TwigTemplate_0c4e8a6492fa65c9940ac5afcac4d78c3df3bba419534bde3359081d6706d43e extends \Twig\Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Home/Default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Home/Default/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Home/Default/index.html.twig", 1);
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
        echo "    <div class=\"col-md-6 offset-md-3 text-center\">
       <!--";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "id"], "method"), "html", null, true);
        echo "-->
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entradas"] ?? $this->getContext($context, "entradas")));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 7
            echo "            <div class=\"card mt-3\">
                <div class=\"card-body\">
                    <h5 class=\"card-tittle\">
                        <h3><span class=\"badge badge-light card\">";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "titulo", []), "html", null, true);
            echo "</span></h3>
                    </h5>
                    <p class=\"card-text\">
                        ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "cuerpo", []), "html", null, true);
            echo "
                    </p>
                    ";
            // line 15
            if ((($this->getAttribute($context["e"], "autor", []) == ($context["id"] ?? $this->getContext($context, "id"))) || (($context["isAdmin"] ?? $this->getContext($context, "isAdmin")) == twig_constant("LoginBundle\\Repository\\usersRepository::USER_ADMIN")))) {
                // line 16
                echo "                        <button  class=\"btn btn-success btn-editar\" data-usuario=\"";
                echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
                echo "\" data-entrada=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "id", []), "html", null, true);
                echo "\" data-titulo=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "titulo", []), "html", null, true);
                echo "\" data-cuerpo=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "cuerpo", []), "html", null, true);
                echo "\"
                        data-toggle=\"modal\" data-target=\"#modalEditar\">
                        Editar</button>

                        <button class=\"btn btn-danger btn-eliminar\" data-usuario=\"";
                // line 20
                echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
                echo "\" data-entrada=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "id", []), "html", null, true);
                echo "\" data-toggle=\"modal\" data-target=\"#modalEditar\" >Eliminar</button>

                    ";
            }
            // line 23
            echo "                </div>
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
        // line 41
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

    // line 56
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo "    <script>
        \$(document).ready(function() {

            \$(\".btn-editar\").click(function() {

              \$(\".modal-title .badge\").text(\"Editar Entrada\");
              \$(\".modal-body\").empty();
              \$(\".modal-body\").append('";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formEntrada"] ?? $this->getContext($context, "formEntrada")), "titulo", []), 'label');
        echo "');
              \$(\".modal-body\").append('";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formEntrada"] ?? $this->getContext($context, "formEntrada")), "titulo", []), 'widget');
        echo "');
              \$(\".modal-body\").append('";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formEntrada"] ?? $this->getContext($context, "formEntrada")), "cuerpo", []), 'label');
        echo "');
              \$(\".modal-body\").append('";
        // line 67
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
        return "@Home/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 67,  187 => 66,  183 => 65,  179 => 64,  170 => 57,  161 => 56,  137 => 41,  120 => 26,  112 => 23,  104 => 20,  90 => 16,  88 => 15,  83 => 13,  77 => 10,  72 => 7,  68 => 6,  64 => 5,  61 => 4,  52 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block content %}
    <div class=\"col-md-6 offset-md-3 text-center\">
       <!--{{ app.session.get('id') }}-->
        {% for e in entradas %}
            <div class=\"card mt-3\">
                <div class=\"card-body\">
                    <h5 class=\"card-tittle\">
                        <h3><span class=\"badge badge-light card\">{{ e.titulo }}</span></h3>
                    </h5>
                    <p class=\"card-text\">
                        {{ e.cuerpo }}
                    </p>
                    {% if (e.autor == id) or (isAdmin == constant('LoginBundle\\\\Repository\\\\usersRepository::USER_ADMIN')) %}
                        <button  class=\"btn btn-success btn-editar\" data-usuario=\"{{ id }}\" data-entrada=\"{{ e.id }}\" data-titulo=\"{{ e.titulo }}\" data-cuerpo=\"{{ e.cuerpo }}\"
                        data-toggle=\"modal\" data-target=\"#modalEditar\">
                        Editar</button>

                        <button class=\"btn btn-danger btn-eliminar\" data-usuario=\"{{ id }}\" data-entrada=\"{{ e.id }}\" data-toggle=\"modal\" data-target=\"#modalEditar\" >Eliminar</button>

                    {% endif %}
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
{% endblock %}", "@Home/Default/index.html.twig", "/home/nicolas/blog/src/HomeBundle/Resources/views/Default/index.html.twig");
    }
}