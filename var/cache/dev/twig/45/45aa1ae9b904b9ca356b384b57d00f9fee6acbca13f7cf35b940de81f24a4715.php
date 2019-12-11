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

/* KilikTableBundle::_pagination.html.twig */
class __TwigTemplate_1aef32cdbd477e655427e261c7021a439fb36c25bd79383231f39f48b192411c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "KilikTableBundle::_pagination.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "KilikTableBundle::_pagination.html.twig"));

        // line 2
        echo "
";
        // line 4
        if ((isset($context["tableRenderPagination"]) || array_key_exists("tableRenderPagination", $context))) {
            // line 5
            echo "    <a href=\"#\" class=\"btn btn-default tablePaginationButton ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 5, $this->source); })()), "page", [], "any", false, false, false, 5) < 2)) {
                echo "disabled";
            }
            echo "\" data-table-page=\"1\">
        <span class=\"glyphicon glyphicon-fast-backward\"></span>
    </a>
    <a href=\"#\" class=\"btn btn-default tablePaginationButton ";
            // line 8
            if ((twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 8, $this->source); })()), "page", [], "any", false, false, false, 8) < 2)) {
                echo "disabled";
            }
            echo "\" data-table-page=\"";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 8, $this->source); })()), "page", [], "any", false, false, false, 8) - 1), "html", null, true);
            echo "\">
        <span class=\"glyphicon glyphicon-backward\"></span>
    </a>
    <a href=\"#\" class=\"btn btn-default tablePaginationButton ";
            // line 11
            if ((twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 11, $this->source); })()), "page", [], "any", false, false, false, 11) > (twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 11, $this->source); })()), "lastPage", [], "any", false, false, false, 11) - 1))) {
                echo "disabled";
            }
            echo "\" data-table-page=\"";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 11, $this->source); })()), "page", [], "any", false, false, false, 11) + 1), "html", null, true);
            echo "\">
        <span class=\"glyphicon glyphicon-forward\"></span>
    </a>
    <a href=\"#\" class=\"btn btn-default tablePaginationButton ";
            // line 14
            if ((twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 14, $this->source); })()), "page", [], "any", false, false, false, 14) == twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 14, $this->source); })()), "lastPage", [], "any", false, false, false, 14))) {
                echo "disabled";
            }
            echo "\" data-table-page=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 14, $this->source); })()), "lastPage", [], "any", false, false, false, 14), "html", null, true);
            echo "\">
        <span class=\"glyphicon glyphicon-fast-forward\"></span>
    </a>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "KilikTableBundle::_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 14,  67 => 11,  57 => 8,  48 => 5,  46 => 4,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# @KilikTable/_pagination.html.twig #}

{# basic pagination #}
{% if tableRenderPagination is defined %}
    <a href=\"#\" class=\"btn btn-default tablePaginationButton {% if table.page < 2 %}disabled{% endif %}\" data-table-page=\"1\">
        <span class=\"glyphicon glyphicon-fast-backward\"></span>
    </a>
    <a href=\"#\" class=\"btn btn-default tablePaginationButton {% if table.page < 2 %}disabled{% endif %}\" data-table-page=\"{{ table.page-1 }}\">
        <span class=\"glyphicon glyphicon-backward\"></span>
    </a>
    <a href=\"#\" class=\"btn btn-default tablePaginationButton {% if table.page > table.lastPage-1 %}disabled{% endif %}\" data-table-page=\"{{ table.page+1 }}\">
        <span class=\"glyphicon glyphicon-forward\"></span>
    </a>
    <a href=\"#\" class=\"btn btn-default tablePaginationButton {% if table.page == table.lastPage %}disabled{% endif %}\" data-table-page=\"{{ table.lastPage }}\">
        <span class=\"glyphicon glyphicon-fast-forward\"></span>
    </a>
{% endif %}
", "KilikTableBundle::_pagination.html.twig", "/home/nicolas/Documentos/Blog/vendor/kilik/table/Resources/views/_pagination.html.twig");
    }
}
