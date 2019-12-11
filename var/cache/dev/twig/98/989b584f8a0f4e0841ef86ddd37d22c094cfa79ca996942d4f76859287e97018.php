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

/* KilikTableBundle::_columnNameNoTable.html.twig */
class __TwigTemplate_7dd8a1e4e52c67b67ad0ea940b5a12d027d7b1cf13af717d69f79231886a4c67 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "KilikTableBundle::_columnNameNoTable.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "KilikTableBundle::_columnNameNoTable.html.twig"));

        // line 2
        $context["label"] = twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 2, $this->source); })()), "label", [], "any", false, false, false, 2);
        // line 3
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 3, $this->source); })()), "translateDomain", [], "any", false, false, false, 3))) {
            // line 4
            echo "    ";
            $context["label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 4, $this->source); })()), "label", [], "any", false, false, false, 4), [], twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 4, $this->source); })()), "translateDomain", [], "any", false, false, false, 4));
            // line 5
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 5, $this->source); })()), "capitalize", [], "any", false, false, false, 5)) {
                // line 6
                echo "        ";
                $context["label"] = twig_capitalize_string_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 6, $this->source); })()));
                // line 7
                echo "    ";
            }
        }
        // line 9
        echo "
";
        // line 10
        if (twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 10, $this->source); })()), "sortable", [], "any", false, false, false, 10)) {
            // line 11
            echo "    <div class=\"columnSortable\" data-column=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), "html", null, true);
            echo "\" data-sort-column=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), "html", null, true);
            echo "\" data-label=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 11, $this->source); })()), "label", [], "any", false, false, false, 11), "html", null, true);
            echo "\" scope=\"col\">
        <a href=\"#\">
            ";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 13, $this->source); })()), "html", null, true);
            echo "
        </a>
        <span class=\"glyphicon columnSortableIcon\"></span>
    </div>
";
        } else {
            // line 18
            echo "    <div data-column=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18), "html", null, true);
            echo "\" data-label=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 18, $this->source); })()), "label", [], "any", false, false, false, 18), "html", null, true);
            echo "\" scope=\"col\">
        ";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "
    </div>
";
        }
        // line 22
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "KilikTableBundle::_columnNameNoTable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 22,  90 => 19,  83 => 18,  75 => 13,  65 => 11,  63 => 10,  60 => 9,  56 => 7,  53 => 6,  50 => 5,  47 => 4,  45 => 3,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# @KilikTable/_columnNameNoTable.html.twig #}
{% set label = column.label %}
{% if column.translateDomain is not null %}
    {% set label = (column.label | trans({}, column.translateDomain)) %}
    {% if column.capitalize %}
        {% set label = label | capitalize %}
    {% endif %}
{% endif %}

{% if column.sortable %}
    <div class=\"columnSortable\" data-column=\"{{ column.name }}\" data-sort-column=\"{{ column.name }}\" data-label=\"{{column.label}}\" scope=\"col\">
        <a href=\"#\">
            {{ label }}
        </a>
        <span class=\"glyphicon columnSortableIcon\"></span>
    </div>
{% else %}
    <div data-column=\"{{ column.name }}\" data-label=\"{{column.label}}\" scope=\"col\">
        {{ label }}
    </div>
{% endif %}

", "KilikTableBundle::_columnNameNoTable.html.twig", "/home/nicolas/Documentos/Blog/vendor/kilik/table/Resources/views/_columnNameNoTable.html.twig");
    }
}
