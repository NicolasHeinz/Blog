<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @KilikTable/_paginationNumbersIcons.html.twig */
class __TwigTemplate_3e1361244e4f00bb2dd21da8810414c566b52b02f38aef5345ef8f645a5f4d2a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KilikTable/_paginationNumbersIcons.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KilikTable/_paginationNumbersIcons.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((isset($context["tableRenderPagination"]) || array_key_exists("tableRenderPagination", $context))) {
            // line 4
            echo "    <a href=\"#\" class=\"btn btn-default tablePaginationButton ";
            if (($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "page", []) < 2)) {
                echo "disabled";
            }
            echo "\" data-table-page=\"1\">
        <span class=\"glyphicon glyphicon-fast-backward\"></span>
    </a>
    <a href=\"#\" class=\"btn btn-default tablePaginationButton ";
            // line 7
            if (($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "page", []) < 2)) {
                echo "disabled";
            }
            echo "\" data-table-page=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "previousPage", []), "html", null, true);
            echo "\">
        <span class=\"glyphicon glyphicon-backward\"></span>
    </a>
    <a href=\"#\" class=\"btn btn-default tablePaginationButton\" data-table-page=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "page", []), "html", null, true);
            echo "\">
        ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "page", []), "html", null, true);
            echo "
    </a>
    <a href=\"#\" class=\"btn btn-default tablePaginationButton ";
            // line 13
            if (($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "page", []) > ($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "lastPage", []) - 1))) {
                echo "disabled";
            }
            echo "\" data-table-page=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "nextPage", []), "html", null, true);
            echo "\">
        <span class=\"glyphicon glyphicon-forward\"></span>
    </a>
    <a href=\"#\" class=\"btn btn-default tablePaginationButton ";
            // line 16
            if (($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "page", []) > ($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "lastPage", []) - 1))) {
                echo "disabled";
            }
            echo "\" data-table-page=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "lastPage", []), "html", null, true);
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
        return "@KilikTable/_paginationNumbersIcons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 16,  69 => 13,  64 => 11,  60 => 10,  50 => 7,  41 => 4,  39 => 3,  36 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# @KilikTable/_paginationNumbersIcons.html.twig #}

{% if tableRenderPagination is defined %}
    <a href=\"#\" class=\"btn btn-default tablePaginationButton {% if table.page < 2 %}disabled{% endif %}\" data-table-page=\"1\">
        <span class=\"glyphicon glyphicon-fast-backward\"></span>
    </a>
    <a href=\"#\" class=\"btn btn-default tablePaginationButton {% if table.page < 2 %}disabled{% endif %}\" data-table-page=\"{{ table.previousPage }}\">
        <span class=\"glyphicon glyphicon-backward\"></span>
    </a>
    <a href=\"#\" class=\"btn btn-default tablePaginationButton\" data-table-page=\"{{ table.page }}\">
        {{ table.page }}
    </a>
    <a href=\"#\" class=\"btn btn-default tablePaginationButton {% if table.page > table.lastPage-1 %}disabled{% endif %}\" data-table-page=\"{{ table.nextPage }}\">
        <span class=\"glyphicon glyphicon-forward\"></span>
    </a>
    <a href=\"#\" class=\"btn btn-default tablePaginationButton {% if table.page > table.lastPage-1 %}disabled{% endif %}\" data-table-page=\"{{ table.lastPage }}\">
        <span class=\"glyphicon glyphicon-fast-forward\"></span>
    </a>
{% endif %}
", "@KilikTable/_paginationNumbersIcons.html.twig", "/home/nicolas/blog/vendor/kilik/table/Resources/views/_paginationNumbersIcons.html.twig");
    }
}
