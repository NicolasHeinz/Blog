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

/* EntradaBundle:Default:index.html.twig */
class __TwigTemplate_8b3d9d1004310fe5f052e659fa3456f518b20496300302a6b0665d00a3221183 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "EntradaBundle:Default:index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    <div class=\"col-md-8 offset-md-2 mt-5 card\">
        <div class=\"col-md-12 mt-4\">
            <h1 class=\"text-center\"><span class=\"badge badge-primary\">Nuevo Blog</span></h1>
           <form action=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("entrada_homepage");
        echo "\" method=\"post\">
               ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "titulo", [], "any", false, false, false, 9), 'label');
        echo "
               ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "titulo", [], "any", false, false, false, 10), 'widget');
        echo "
               ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "cuerpo", [], "any", false, false, false, 11), 'label');
        echo "
               ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "cuerpo", [], "any", false, false, false, 12), 'widget');
        echo "
               <div class=\"col-md-12 text-center mt-4 mb-4\">
                   <button type=\"submit\" class=\"btn btn-success\">Guardar</button>
               </div>
           </form>

        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "EntradaBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 12,  68 => 11,  64 => 10,  60 => 9,  56 => 8,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "EntradaBundle:Default:index.html.twig", "/home/nicolas/Documentos/Blog/src/EntradaBundle/Resources/views/Default/index.html.twig");
    }
}
