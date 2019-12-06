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

/* @KilikTable/_pagination.html.twig */
class __TwigTemplate_b89537f9fc47871a8d0fa1615b6b115552662830ae455e8c87478084ff5a0588 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KilikTable/_pagination.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KilikTable/_pagination.html.twig"));

        // line 2
        echo "
";
        // line 4
        if ((isset($context["tableRenderPagination"]) || array_key_exists("tableRenderPagination", $context))) {
            // line 5
            echo "    <a href=\"#\" class=\"btn btn-default tablePaginationButton ";
            if (($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "page", []) < 2)) {
                echo "disabled";
            }
            echo "\" data-table-page=\"1\">
        <span class=\"glyphicon glyphicon-fast-backward\"></span>
    </a>
    <a href=\"#\" class=\"btn btn-default tablePaginationButton ";
            // line 8
            if (($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "page", []) < 2)) {
                echo "disabled";
            }
            echo "\" data-table-page=\"";
            echo twig_escape_filter($this->env, ($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "page", []) - 1), "html", null, true);
            echo "\">
        <span class=\"glyphicon glyphicon-backward\"></span>
    </a>
    <a href=\"#\" class=\"btn btn-default tablePaginationButton ";
            // line 11
            if (($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "page", []) > ($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "lastPage", []) - 1))) {
                echo "disabled";
            }
            echo "\" data-table-page=\"";
            echo twig_escape_filter($this->env, ($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "page", []) + 1), "html", null, true);
            echo "\">
        <span class=\"glyphicon glyphicon-forward\"></span>
    </a>
    <a href=\"#\" class=\"btn btn-default tablePaginationButton ";
            // line 14
            if (($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "page", []) == $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "lastPage", []))) {
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
        return "@KilikTable/_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 14,  60 => 11,  50 => 8,  41 => 5,  39 => 4,  36 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@KilikTable/_pagination.html.twig", "/home/nicolas/blog/vendor/kilik/table/Resources/views/_pagination.html.twig");
    }
}
