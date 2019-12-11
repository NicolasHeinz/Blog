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

/* HomeBundle:t:_columnCellNoTable.html.twig */
class __TwigTemplate_b783cd48bec6eab7b48318c179162d0a514e7503936832f310c42780bec1a87e extends \Twig\Template
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
        if ( !twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "hidden", [], "any", false, false, false, 2)) {
            // line 3
            echo "    <div ";
            if (twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "displayClass", [], "any", false, false, false, 3)) {
                echo "class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "displayClass", [], "any", false, false, false, 3), "html", null, true);
                echo "\"";
            }
            echo " data-label=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "label", [], "any", false, false, false, 3), "html", null, true);
            echo "\">
        ";
            // line 4
            $context["cellHtml"] = twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "value", [0 => ($context["column"] ?? null), 1 => ($context["row"] ?? null)], "method", false, false, false, 4);
            // line 5
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "raw", [], "any", false, false, false, 5)) {
                // line 6
                echo "            ";
                echo ($context["cellHtml"] ?? null);
                echo "
        ";
            } else {
                // line 8
                echo "            ";
                echo twig_escape_filter($this->env, ($context["cellHtml"] ?? null), "html", null, true);
                echo "
        ";
            }
            // line 10
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "HomeBundle:t:_columnCellNoTable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 10,  61 => 8,  55 => 6,  52 => 5,  50 => 4,  39 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "HomeBundle:t:_columnCellNoTable.html.twig", "/home/nicolas/Documentos/Blog/src/HomeBundle/Resources/views/t/_columnCellNoTable.html.twig");
    }
}
