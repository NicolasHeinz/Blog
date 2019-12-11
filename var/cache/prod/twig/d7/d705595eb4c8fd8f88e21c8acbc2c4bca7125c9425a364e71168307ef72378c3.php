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

/* HomeBundle:Perfil:home_perfil.html.twig */
class __TwigTemplate_1d177300e5c1b1f0d65813c33c8eabef1e2da380e33b3d49b58ae958a058da11 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

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
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Home/Default/index.html.twig", "HomeBundle:Perfil:home_perfil.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    <div class=\"col-md-6 offset-md-3 text-center\">
        <h1 class=\"text-center\"><span class=\"badge badge-primary\">Mis Posts</span></h1>
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entradas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 8
            echo "            <div class=\"card mt-3\">
                <div class=\"card-body\">
                    <h5 class=\"card-tittle\">
                        <h3><span class=\"badge badge-light card\">";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "titulo", [], "any", false, false, false, 11), "html", null, true);
            echo "</span></h3>
                    </h5>
                    <p class=\"card-text\">
                        ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "cuerpo", [], "any", false, false, false, 14), "html", null, true);
            echo "
                    </p>

                    <button  class=\"btn btn-success btn-editar\" data-entrada=\"";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "id", [], "any", false, false, false, 17), "html", null, true);
            echo "\" data-titulo=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "titulo", [], "any", false, false, false, 17), "html", null, true);
            echo "\" data-cuerpo=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "cuerpo", [], "any", false, false, false, 17), "html", null, true);
            echo "\"
                             data-toggle=\"modal\" data-target=\"#modalEditar\">
                        Editar</button>

                    <button class=\"btn btn-danger btn-eliminar\" data-entrada=\"";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "id", [], "any", false, false, false, 21), "html", null, true);
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

    // line 54
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "    <script>
        \$(document).ready(function() {

            \$(\".btn-editar\").click(function() {

                \$(\".modal-title .badge\").text(\"Editar Entrada\");
                \$(\".modal-body\").empty();
                \$(\".modal-body\").append('";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formEntrada"] ?? null), "titulo", [], "any", false, false, false, 62), 'label');
        echo "');
                \$(\".modal-body\").append('";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formEntrada"] ?? null), "titulo", [], "any", false, false, false, 63), 'widget');
        echo "');
                \$(\".modal-body\").append('";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formEntrada"] ?? null), "cuerpo", [], "any", false, false, false, 64), 'label');
        echo "');
                \$(\".modal-body\").append('";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formEntrada"] ?? null), "cuerpo", [], "any", false, false, false, 65), 'widget');
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
    }

    public function getTemplateName()
    {
        return "HomeBundle:Perfil:home_perfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 65,  153 => 64,  149 => 63,  145 => 62,  136 => 55,  132 => 54,  114 => 39,  99 => 26,  88 => 21,  77 => 17,  71 => 14,  65 => 11,  60 => 8,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "HomeBundle:Perfil:home_perfil.html.twig", "/home/nicolas/Documentos/Blog/src/HomeBundle/Resources/views/Perfil/home_perfil.html.twig");
    }
}
