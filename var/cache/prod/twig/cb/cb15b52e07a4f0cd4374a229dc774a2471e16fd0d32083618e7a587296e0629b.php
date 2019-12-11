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

/* KilikTableBundle::_columnCell.html.twig */
class __TwigTemplate_19ce91bd8ddb86ff595088fe7ffcf0f927c02334195e75c8213c47e06228c350 extends \Twig\Template
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
        echo "
";
        // line 3
        if ( !twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "hidden", [], "any", false, false, false, 3)) {
            // line 4
            echo "    <td ";
            if (twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "displayClass", [], "any", false, false, false, 4)) {
                echo "class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "displayClass", [], "any", false, false, false, 4), "html", null, true);
                echo "\"";
            }
            echo " data-label=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "label", [], "any", false, false, false, 4), "html", null, true);
            echo "\">
        ";
            // line 5
            $context["cellHtml"] = twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "value", [0 => ($context["column"] ?? null), 1 => ($context["row"] ?? null)], "method", false, false, false, 5);
            // line 6
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "raw", [], "any", false, false, false, 6)) {
                // line 7
                echo "            ";
                echo ($context["cellHtml"] ?? null);
                echo "
        ";
            } else {
                // line 9
                echo "            ";
                echo twig_escape_filter($this->env, ($context["cellHtml"] ?? null), "html", null, true);
                echo "
        ";
            }
            // line 11
            echo "    </td>
";
        }
    }

    public function getTemplateName()
    {
        return "KilikTableBundle::_columnCell.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 11,  64 => 9,  58 => 7,  55 => 6,  53 => 5,  42 => 4,  40 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "KilikTableBundle::_columnCell.html.twig", "/home/nicolas/Documentos/Blog/vendor/kilik/table/Resources/views/_columnCell.html.twig");
    }
}
