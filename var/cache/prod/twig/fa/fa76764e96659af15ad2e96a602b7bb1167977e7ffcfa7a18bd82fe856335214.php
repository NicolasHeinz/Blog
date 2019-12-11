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

/* KilikTableBundle::_paginationNumbersIcons.html.twig */
class __TwigTemplate_0f842be8d33a58c29a6bc5a76345dff3137ffee13118c094ebd40d9cf50161cc extends \Twig\Template
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
        if ((isset($context["tableRenderPagination"]) || array_key_exists("tableRenderPagination", $context))) {
            // line 4
            echo "    <a href=\"#\" class=\"btn btn-default tablePaginationButton ";
            if ((twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "page", [], "any", false, false, false, 4) < 2)) {
                echo "disabled";
            }
            echo "\" data-table-page=\"1\">
        <span class=\"glyphicon glyphicon-fast-backward\"></span>
    </a>
    <a href=\"#\" class=\"btn btn-default tablePaginationButton ";
            // line 7
            if ((twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "page", [], "any", false, false, false, 7) < 2)) {
                echo "disabled";
            }
            echo "\" data-table-page=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "previousPage", [], "any", false, false, false, 7), "html", null, true);
            echo "\">
        <span class=\"glyphicon glyphicon-backward\"></span>
    </a>
    <a href=\"#\" class=\"btn btn-default tablePaginationButton\" data-table-page=\"";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "page", [], "any", false, false, false, 10), "html", null, true);
            echo "\">
        ";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "page", [], "any", false, false, false, 11), "html", null, true);
            echo "
    </a>
    <a href=\"#\" class=\"btn btn-default tablePaginationButton ";
            // line 13
            if ((twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "page", [], "any", false, false, false, 13) > (twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "lastPage", [], "any", false, false, false, 13) - 1))) {
                echo "disabled";
            }
            echo "\" data-table-page=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "nextPage", [], "any", false, false, false, 13), "html", null, true);
            echo "\">
        <span class=\"glyphicon glyphicon-forward\"></span>
    </a>
    <a href=\"#\" class=\"btn btn-default tablePaginationButton ";
            // line 16
            if ((twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "page", [], "any", false, false, false, 16) > (twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "lastPage", [], "any", false, false, false, 16) - 1))) {
                echo "disabled";
            }
            echo "\" data-table-page=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "lastPage", [], "any", false, false, false, 16), "html", null, true);
            echo "\">
        <span class=\"glyphicon glyphicon-fast-forward\"></span>
    </a>
";
        }
    }

    public function getTemplateName()
    {
        return "KilikTableBundle::_paginationNumbersIcons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 16,  70 => 13,  65 => 11,  61 => 10,  51 => 7,  42 => 4,  40 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "KilikTableBundle::_paginationNumbersIcons.html.twig", "/home/nicolas/Documentos/Blog/vendor/kilik/table/Resources/views/_paginationNumbersIcons.html.twig");
    }
}
