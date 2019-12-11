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

/* LoginBundle:Default:index.html.twig */
class __TwigTemplate_89afc9557e3d6ce8d5bc08b0c56385c4551fd2a5bdf1558bcbb132f0566da895 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'menu' => [$this, 'block_menu'],
            'content' => [$this, 'block_content'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "LoginBundle:Default:index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
    <div class=\"col-md-4 offset-md-4 alto card\">
        ";
        // line 7
        if (($context["error"] ?? null)) {
            // line 8
            echo "            <div>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 8), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 8), "security"), "html", null, true);
            echo "</div>
        ";
        }
        // line 10
        echo "
        <form action=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"post\">
            <input type=\"hidden\" name=\"_csrf_token\"
                   value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
            >
            <div class=\"col-md-12  mt-3\">
                <div class=\"form-group mt-4\">
                    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 17), 'label');
        echo "
                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 18), 'widget', ["value" => ($context["last_username"] ?? null)]);
        echo "
                    <div class=\"errors-form\">
                        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 20), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 24), 'label');
        echo "
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 25), 'widget');
        echo "
                    <div class=\"errors-form\">
                        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 27), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"form-group text-center\">
                    <div class=\"mt-5\">
                        <a class=\"btn btn-primary\" href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registro");
        echo "\">Registrate</a>
                        <button class=\"btn btn-success\" type=\"submit\">Iniciar Sesion</button>
                        <div class=\"mt-5\">
                            <b>¿Olvidaste tu Contraseña?</b> <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recuperar_password");
        echo "\">Click Aqui!</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
";
    }

    // line 44
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "    <style>
        .errors-form{
            color: red;
        }

        .errors-form ul{
            list-style:none !important;
        }

        .alto{
            margin-top: 5em;
        }
    </style>
";
    }

    public function getTemplateName()
    {
        return "LoginBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 45,  136 => 44,  124 => 35,  118 => 32,  110 => 27,  105 => 25,  101 => 24,  94 => 20,  89 => 18,  85 => 17,  78 => 13,  73 => 11,  70 => 10,  64 => 8,  62 => 7,  58 => 5,  54 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "LoginBundle:Default:index.html.twig", "/home/nicolas/Documentos/Blog/src/LoginBundle/Resources/views/Default/index.html.twig");
    }
}
