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

/* HomeBundle:table:_columnFilter.html.twig */
class __TwigTemplate_3b4b544e38e328948c4660f273500337eb63b329abbc0c705d44f836a8abc6d3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<td data-column=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "name", [], "any", false, false, false, 2), "html", null, true);
        echo "\"";
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filterClass", [], "any", false, false, false, 2))) {
            echo " class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filterClass", [], "any", false, false, false, 2), "html", null, true);
            echo "\"";
        }
        echo "  data-label=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "label", [], "any", false, false, false, 2), "html", null, true);
        echo "\">
    ";
        // line 3
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 3))) {
            // line 4
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "formView", [], "any", false, false, false, 4), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 4), "name", [], "any", false, false, false, 4), [], "any", false, false, false, 4), 'widget', ["attr" => ["class" => "form-control refreshOnKeyup refreshOnChange", "data-column" => twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "name", [], "any", false, false, false, 4)]]);
            echo "
    ";
        }
        // line 6
        echo "</td>
";
    }

    public function getTemplateName()
    {
        return "HomeBundle:table:_columnFilter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 6,  52 => 4,  50 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "HomeBundle:table:_columnFilter.html.twig", "/home/nicolas/Documentos/Blog/src/HomeBundle/Resources/views/table/_columnFilter.html.twig");
    }
}
