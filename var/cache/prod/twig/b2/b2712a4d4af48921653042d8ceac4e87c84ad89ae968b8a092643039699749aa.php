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

/* HomeBundle:Default:index.html.twig */
class __TwigTemplate_9b7c0b45af45c668b6ccd25c961b2e62e4aabda5ab88c32026339007dc2dd6d1 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "HomeBundle:Default:index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"col-md-6 offset-md-3 text-center\">
       <!--";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 5), "get", [0 => "id"], "method", false, false, false, 5), "html", null, true);
        echo "-->
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entradas"] ?? null));
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
            if (((twig_get_attribute($this->env, $this->source, $context["e"], "autor", [], "any", false, false, false, 15) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 15), "get", [0 => "id"], "method", false, false, false, 15)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 15), "get", [0 => "rol"], "method", false, false, false, 15) == twig_constant("LoginBundle\\Repository\\usersRepository::USER_ADMIN")))) {
                // line 16
                echo "                        <button  class=\"btn btn-success btn-editar\" data-usuario=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 16), "get", [0 => "id"], "method", false, false, false, 16), "html", null, true);
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
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 20), "get", [0 => "id"], "method", false, false, false, 20), "html", null, true);
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
    }

    // line 55
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "    <script>
        \$(document).ready(function() {

            \$(\".btn-editar\").click(function() {

                \$(\".modal-title .badge\").text(\"Editar Entrada\");
                \$(\".modal-body\").empty();
                \$(\".modal-body\").append('";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formEntrada"] ?? null), "titulo", [], "any", false, false, false, 63), 'label');
        echo "');
                \$(\".modal-body\").append('";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formEntrada"] ?? null), "titulo", [], "any", false, false, false, 64), 'widget');
        echo "');
                \$(\".modal-body\").append('";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formEntrada"] ?? null), "cuerpo", [], "any", false, false, false, 65), 'label');
        echo "');
                \$(\".modal-body\").append('";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formEntrada"] ?? null), "cuerpo", [], "any", false, false, false, 66), 'widget');
        echo "');
                \$(\".modal-body\").append('<input type=\"hidden\" id=\"id\" name=\"_id_entrada\" value=\"'+\$(this).data('entrada')+'\">');
                \$(\".btn-ok\").html('Guardar');

                \$(\"#entradabundle_entrada_titulo\").val(\$(this).data('titulo'));
                \$(\"#entradabundle_entrada_cuerpo\").val(\$(this).data('cuerpo'));

            });
Presentación del curso
Paco Gomez
2
6:20
Reproduciendo
App con Symfony 3 - 01 - Introducción a la aplicación
Paco Gomez
3
11:59
Reproduciendo
App con Symfony 3 - 02 - Entorno de trabajo
Paco Gomez
4
12:01
Reproduciendo
App con Symfony 3 - 03 - Proyecto en blanco
Paco Gomez
5
5:39
Reproduciendo
App con Symfony 3 - 03_v2 - Symfony Standard Edition
Paco Gomez
6
5:16
Reproduciendo
App con Symfony 3 - 04 - Estructura de directorios
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
    }

    public function getTemplateName()
    {
        return "HomeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 66,  166 => 65,  162 => 64,  158 => 63,  149 => 56,  145 => 55,  127 => 41,  110 => 26,  102 => 23,  94 => 20,  80 => 16,  78 => 15,  73 => 13,  67 => 10,  62 => 7,  58 => 6,  54 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "HomeBundle:Default:index.html.twig", "/home/nicolas/Documentos/Blog/src/HomeBundle/Resources/views/Default/index.html.twig");
    }
}
