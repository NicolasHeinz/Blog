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
class __TwigTemplate_5b0244cdb3227d88b2cdf0ef88e05a53a7d095ac4e272165d5ee6a53968dd162 extends \Twig\Template
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
        // line 4
        if ((isset($context["tableRenderPagination"]) || array_key_exists("tableRenderPagination", $context))) {
            // line 5
            echo "    <a href=\"#\" class=\"btn btn-default tablePaginationButton ";
            if ((twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "page", [], "any", false, false, false, 5) < 2)) {
                echo "disabled";
            }
            echo "\" data-table-page=\"1\">
        <span class=\"glyphicon glyphicon-fast-backward\"></span>
    </a>
    <a href=\"#\" class=\"btn btn-default tablePaginationButton ";
            // line 8
            if ((twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "page", [], "any", false, false, false, 8) < 2)) {
                echo "disabled";
            }
            echo "\" data-table-page=\"";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "page", [], "any", false, false, false, 8) - 1), "html", null, true);
            echo "\">
        <span class=\"glyphicon glyphicon-backward\"></span>
    </a>
    <a href=\"#\" class=\"btn btn-default tablePaginationButton ";
            // line 11
            if ((twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "page", [], "any", false, false, false, 11) > (twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "lastPage", [], "any", false, false, false, 11) - 1))) {
                echo "disabled";
            }
            echo "\" data-table-page=\"";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "page", [], "any", false, false, false, 11) + 1), "html", null, true);
            echo "\">
        <span class=\"glyphicon glyphicon-forward\"></span>
    </a>
    <a href=\"#\" class=\"btn btn-default tablePaginationButton ";
            // line 14
            if ((twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "page", [], "any", false, false, false, 14) == twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "lastPage", [], "any", false, false, false, 14))) {
                echo "disabled";
            }
            echo "\" data-table-page=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "lastPage", [], "any", false, false, false, 14), "html", null, true);
            echo "\">
        <span class=\"glyphicon glyphicon-fast-forward\"></span>
    </a>
";
        }
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
        return array (  71 => 14,  61 => 11,  51 => 8,  42 => 5,  40 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "KilikTableBundle::_pagination.html.twig", "/home/nicolas/Documentos/Blog/vendor/kilik/table/Resources/views/_pagination.html.twig");
    }
}
