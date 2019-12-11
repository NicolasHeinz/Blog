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
class __TwigTemplate_c0f19619f0f3a0545a707448cd41e2c664a0ca22f9fe65b03360dcd003a24f19 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "KilikTableBundle::_columnCell.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "KilikTableBundle::_columnCell.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 3, $this->source); })()), "hidden", [], "any", false, false, false, 3)) {
            // line 4
            echo "    <td ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 4, $this->source); })()), "displayClass", [], "any", false, false, false, 4)) {
                echo "class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 4, $this->source); })()), "displayClass", [], "any", false, false, false, 4), "html", null, true);
                echo "\"";
            }
            echo " data-label=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 4, $this->source); })()), "label", [], "any", false, false, false, 4), "html", null, true);
            echo "\">
        ";
            // line 5
            $context["cellHtml"] = twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 5, $this->source); })()), "value", [0 => (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 5, $this->source); })()), 1 => (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 5, $this->source); })())], "method", false, false, false, 5);
            // line 6
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 6, $this->source); })()), "raw", [], "any", false, false, false, 6)) {
                // line 7
                echo "            ";
                echo (isset($context["cellHtml"]) || array_key_exists("cellHtml", $context) ? $context["cellHtml"] : (function () { throw new RuntimeError('Variable "cellHtml" does not exist.', 7, $this->source); })());
                echo "
        ";
            } else {
                // line 9
                echo "            ";
                echo twig_escape_filter($this->env, (isset($context["cellHtml"]) || array_key_exists("cellHtml", $context) ? $context["cellHtml"] : (function () { throw new RuntimeError('Variable "cellHtml" does not exist.', 9, $this->source); })()), "html", null, true);
                echo "
        ";
            }
            // line 11
            echo "    </td>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  76 => 11,  70 => 9,  64 => 7,  61 => 6,  59 => 5,  48 => 4,  46 => 3,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# @KilikTable/_columnCell.html.twig #}

{% if not column.hidden %}
    <td {% if column.displayClass %}class=\"{{ column.displayClass }}\"{% endif %} data-label=\"{{column.label}}\">
        {% set cellHtml=table.value(column,row) %}
        {% if column.raw %}
            {{ cellHtml | raw }}
        {% else %}
            {{ cellHtml }}
        {% endif %}
    </td>
{% endif %}
", "KilikTableBundle::_columnCell.html.twig", "/home/nicolas/Documentos/Blog/vendor/kilik/table/Resources/views/_columnCell.html.twig");
    }
}
