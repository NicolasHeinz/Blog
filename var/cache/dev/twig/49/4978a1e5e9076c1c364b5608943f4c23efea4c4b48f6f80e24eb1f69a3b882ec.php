<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Home/Default/index.html.twig */
class __TwigTemplate_d0fb5389025ff4d954a6adeb7fba8051ca714757ffe0d834507a7066207366be extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Home/Default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Home/Default/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Home/Default/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"col-md-6 offset-md-3 text-center\">
       <!--";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "session", [], "any", false, false, false, 5), "get", [0 => "id"], "method", false, false, false, 5), "html", null, true);
        echo "-->
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entradas"]) || array_key_exists("entradas", $context) ? $context["entradas"] : (function () { throw new RuntimeError('Variable "entradas" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 7
            echo "            <div class=\"card mt-3\">
                <div class=\"card-body\">
                    <h5 class=\"card-tittle\">
                        <h3><span class=\"badge badge-light card\">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "titulo", [], "any", false, false, false, 10), "html", null, true);
            echo "</span></h3>
                    </h5>
                    <p class=\"card-text\">
                        ";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "cuerpo", [], "any", false, false, false, 13), "html", null, true);
            echo "
                    </p>
                    ";
            // line 15
            if (((twig_get_attribute($this->env, $this->source, $context["e"], "autor", [], "any", false, false, false, 15) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "session", [], "any", false, false, false, 15), "get", [0 => "id"], "method", false, false, false, 15)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "session", [], "any", false, false, false, 15), "get", [0 => "rol"], "method", false, false, false, 15) == twig_constant("LoginBundle\\Repository\\usersRepository::USER_ADMIN")))) {
                // line 16
                echo "                        <button  class=\"btn btn-success btn-editar\" data-usuario=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "session", [], "any", false, false, false, 16), "get", [0 => "id"], "method", false, false, false, 16), "html", null, true);
                echo "\" data-entrada=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "id", [], "any", false, false, false, 16), "html", null, true);
                echo "\" data-titulo=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "titulo", [], "any", false, false, false, 16), "html", null, true);
                echo "\" data-cuerpo=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "cuerpo", [], "any", false, false, false, 16), "html", null, true);
                echo "\"
                        data-toggle=\"modal\" data-target=\"#modalEditar\">
                        Editar</button>

                        <button class=\"btn btn-danger btn-eliminar\" data-usuario=\"";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "session", [], "any", false, false, false, 20), "get", [0 => "id"], "method", false, false, false, 20), "html", null, true);
                echo "\" data-entrada=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "id", [], "any", false, false, false, 20), "html", null, true);
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("entrada_edit");
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

    // line 55
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 56
        echo "    <script>
        \$(document).ready(function() {

           /* \$(\".navbar-nav .nav-item\").click(function () {
                \$(\".navbar-nav\").find(\".active\").removeClass(\"active\");
                \$(this).addClass(\"active\");
            });*/

            \$(\".navbar-nav\").find(\".active\").removeClass(\"active\");
            \$(\".home\").addClass(\"active\");

            \$(\".btn-editar\").click(function() {

                \$(\".modal-title .badge\").text(\"Editar Entrada\");
                \$(\".modal-body\").empty();
                \$(\".modal-body\").append('";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEntrada"]) || array_key_exists("formEntrada", $context) ? $context["formEntrada"] : (function () { throw new RuntimeError('Variable "formEntrada" does not exist.', 71, $this->source); })()), "titulo", [], "any", false, false, false, 71), 'label');
        echo "');
                \$(\".modal-body\").append('";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEntrada"]) || array_key_exists("formEntrada", $context) ? $context["formEntrada"] : (function () { throw new RuntimeError('Variable "formEntrada" does not exist.', 72, $this->source); })()), "titulo", [], "any", false, false, false, 72), 'widget');
        echo "');
                \$(\".modal-body\").append('";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEntrada"]) || array_key_exists("formEntrada", $context) ? $context["formEntrada"] : (function () { throw new RuntimeError('Variable "formEntrada" does not exist.', 73, $this->source); })()), "cuerpo", [], "any", false, false, false, 73), 'label');
        echo "');
                \$(\".modal-body\").append('";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEntrada"]) || array_key_exists("formEntrada", $context) ? $context["formEntrada"] : (function () { throw new RuntimeError('Variable "formEntrada" does not exist.', 74, $this->source); })()), "cuerpo", [], "any", false, false, false, 74), 'widget');
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
        return array (  208 => 74,  204 => 73,  200 => 72,  196 => 71,  179 => 56,  169 => 55,  145 => 41,  128 => 26,  120 => 23,  112 => 20,  98 => 16,  96 => 15,  91 => 13,  85 => 10,  80 => 7,  76 => 6,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
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
                    {% if (e.autor == app.session.get('id')) or (app.session.get('rol') == constant('LoginBundle\\\\Repository\\\\usersRepository::USER_ADMIN')) %}
                        <button  class=\"btn btn-success btn-editar\" data-usuario=\"{{ app.session.get('id') }}\" data-entrada=\"{{ e.id }}\" data-titulo=\"{{ e.titulo }}\" data-cuerpo=\"{{ e.cuerpo }}\"
                        data-toggle=\"modal\" data-target=\"#modalEditar\">
                        Editar</button>

                        <button class=\"btn btn-danger btn-eliminar\" data-usuario=\"{{ app.session.get('id') }}\" data-entrada=\"{{ e.id }}\" data-toggle=\"modal\" data-target=\"#modalEditar\" >Eliminar</button>

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
{% block scripts %}
    <script>
        \$(document).ready(function() {

           /* \$(\".navbar-nav .nav-item\").click(function () {
                \$(\".navbar-nav\").find(\".active\").removeClass(\"active\");
                \$(this).addClass(\"active\");
            });*/

            \$(\".navbar-nav\").find(\".active\").removeClass(\"active\");
            \$(\".home\").addClass(\"active\");

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
{% endblock %}", "@Home/Default/index.html.twig", "/home/nicolas/Documentos/Blog/src/HomeBundle/Resources/views/Default/index.html.twig");
    }
}