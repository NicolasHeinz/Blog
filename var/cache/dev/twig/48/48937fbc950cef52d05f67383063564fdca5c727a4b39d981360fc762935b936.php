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

/* @Home/table/_paginationNumbers.html.twig */
class __TwigTemplate_c4721e72239ed242f3639e675f299d43acf246a13a6426b94dc94a1074e18954 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Home/table/_paginationNumbers.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Home/table/_paginationNumbers.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((isset($context["tableRenderPagination"]) || array_key_exists("tableRenderPagination", $context))) {
            // line 4
            echo "    ";
            // line 5
            echo "    <a href=\"#\" class=\"btn btn-default tablePaginationButton ";
            if (($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "page", []) < 2)) {
                echo "disabled";
            }
            echo "\" data-table-page=\"";
            echo twig_escape_filter($this->env, ($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "page", []) - 1), "html", null, true);
            echo "\">
        <span class=\"glyphicon glyphicon-arrow-left\"></span> ";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("kiliktable.previous"), "html", null, true);
            echo "
    </a>

    ";
            // line 10
            echo "    ";
            if (($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "page", []) > 2)) {
                // line 11
                echo "        <a href=\"#\" class=\"btn btn-default tablePaginationButton\" data-table-page=\"1\">
            1
        </a>
    ";
            }
            // line 15
            echo "
    ";
            // line 17
            echo "    ";
            if (($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "page", []) > 3)) {
                // line 18
                echo "        ";
                if (($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "page", []) == 4)) {
                    // line 19
                    echo "            <a href=\"#\" class=\"btn btn-default tablePaginationButton\" data-table-page=\"";
                    echo twig_escape_filter($this->env, ($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "page", []) - 2), "html", null, true);
                    echo "\">
                ";
                    // line 20
                    echo twig_escape_filter($this->env, ($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "page", []) - 2), "html", null, true);
                    echo "
            </a>
        ";
                } else {
                    // line 23
                    echo "            <a href=\"#\" class=\"btn btn-default disabled\">
                ...
            </a>
        ";
                }
                // line 27
                echo "    ";
            }
            // line 28
            echo "
    ";
            // line 30
            echo "    ";
            if (($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "page", []) > 1)) {
                // line 31
                echo "        <a href=\"#\" class=\"btn btn-default tablePaginationButton\" data-table-page=\"";
                echo twig_escape_filter($this->env, ($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "page", []) - 1), "html", null, true);
                echo "\">
            ";
                // line 32
                echo twig_escape_filter($this->env, ($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "page", []) - 1), "html", null, true);
                echo "
        </a>
    ";
            }
            // line 35
            echo "
    ";
            // line 37
            echo "    <a href=\"#\" class=\"btn btn-default tablePaginationButton active disabled\" data-table-page=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "page", []), "html", null, true);
            echo "\">
        ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "page", []), "html", null, true);
            echo "
    </a>

    ";
            // line 42
            echo "    ";
            if ((($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "lastPage", []) - $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "page", [])) > 0)) {
                // line 43
                echo "        <a href=\"#\" class=\"btn btn-default tablePaginationButton\" data-table-page=\"";
                echo twig_escape_filter($this->env, ($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "page", []) + 1), "html", null, true);
                echo "\">
            ";
                // line 44
                echo twig_escape_filter($this->env, ($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "page", []) + 1), "html", null, true);
                echo "
        </a>
    ";
            }
            // line 47
            echo "
    ";
            // line 49
            echo "    ";
            if ((($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "lastPage", []) - $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "page", [])) > 2)) {
                // line 50
                echo "        ";
                if ((($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "lastPage", []) - $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "page", [])) == 3)) {
                    // line 51
                    echo "            <a href=\"#\" class=\"btn btn-default tablePaginationButton\" data-table-page=\"";
                    echo twig_escape_filter($this->env, ($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "page", []) + 2), "html", null, true);
                    echo "\">
                ";
                    // line 52
                    echo twig_escape_filter($this->env, ($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "page", []) + 2), "html", null, true);
                    echo "
            </a>
        ";
                } else {
                    // line 55
                    echo "            <a href=\"#\" class=\"btn btn-default disabled\">
                ...
            </a>
        ";
                }
                // line 59
                echo "    ";
            }
            // line 60
            echo "
    ";
            // line 62
            echo "    ";
            if ((($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "lastPage", []) - $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "page", [])) > 1)) {
                // line 63
                echo "        <a href=\"#\" class=\"btn btn-default tablePaginationButton\" data-table-page=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "lastPage", []), "html", null, true);
                echo "\">
            ";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "lastPage", []), "html", null, true);
                echo "
        </a>
    ";
            }
            // line 67
            echo "
    ";
            // line 69
            echo "    <a href=\"#\" class=\"btn btn-default tablePaginationButton ";
            if ((($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "page", []) == $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "lastPage", [])) || ($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "lastPage", []) == 0))) {
                echo "disabled";
            }
            echo "\" data-table-page=\"";
            echo twig_escape_filter($this->env, ($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "page", []) + 1), "html", null, true);
            echo "\">
        ";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("kiliktable.next"), "html", null, true);
            echo " <span class=\"glyphicon glyphicon-arrow-right\"></span>
    </a>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Home/table/_paginationNumbers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 70,  190 => 69,  187 => 67,  181 => 64,  176 => 63,  173 => 62,  170 => 60,  167 => 59,  161 => 55,  155 => 52,  150 => 51,  147 => 50,  144 => 49,  141 => 47,  135 => 44,  130 => 43,  127 => 42,  121 => 38,  116 => 37,  113 => 35,  107 => 32,  102 => 31,  99 => 30,  96 => 28,  93 => 27,  87 => 23,  81 => 20,  76 => 19,  73 => 18,  70 => 17,  67 => 15,  61 => 11,  58 => 10,  52 => 6,  43 => 5,  41 => 4,  39 => 3,  36 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# @KilikTable/_paginationNumbers.html.twig #}

{% if tableRenderPagination is defined %}
    {# previous page #}
    <a href=\"#\" class=\"btn btn-default tablePaginationButton {% if table.page < 2 %}disabled{% endif %}\" data-table-page=\"{{ table.page-1 }}\">
        <span class=\"glyphicon glyphicon-arrow-left\"></span> {{ \"kiliktable.previous\" |trans }}
    </a>

    {# first page #}
    {% if table.page > 2 %}
        <a href=\"#\" class=\"btn btn-default tablePaginationButton\" data-table-page=\"1\">
            1
        </a>
    {% endif %}

    {# page - 2 ? #}
    {% if table.page > 3 %}
        {% if table.page == 4 %}
            <a href=\"#\" class=\"btn btn-default tablePaginationButton\" data-table-page=\"{{ table.page-2 }}\">
                {{ table.page-2 }}
            </a>
        {% else %}
            <a href=\"#\" class=\"btn btn-default disabled\">
                ...
            </a>
        {% endif %}
    {% endif %}

    {# page - 1 ? (previous) #}
    {% if table.page > 1 %}
        <a href=\"#\" class=\"btn btn-default tablePaginationButton\" data-table-page=\"{{ table.page-1 }}\">
            {{ table.page-1 }}
        </a>
    {% endif %}

    {# page active #}
    <a href=\"#\" class=\"btn btn-default tablePaginationButton active disabled\" data-table-page=\"{{ table.page }}\">
        {{ table.page }}
    </a>

    {# page + 1 ? (next) #}
    {% if table.lastPage-table.page > 0 %}
        <a href=\"#\" class=\"btn btn-default tablePaginationButton\" data-table-page=\"{{ table.page+1 }}\">
            {{ table.page+1 }}
        </a>
    {% endif %}

    {# page + 2 ? #}
    {% if table.lastPage-table.page > 2 %}
        {% if table.lastPage-table.page == 3 %}
            <a href=\"#\" class=\"btn btn-default tablePaginationButton\" data-table-page=\"{{ table.page+2 }}\">
                {{ table.page+2 }}
            </a>
        {% else %}
            <a href=\"#\" class=\"btn btn-default disabled\">
                ...
            </a>
        {% endif %}
    {% endif %}

    {# last page #}
    {% if table.lastPage-table.page > 1 %}
        <a href=\"#\" class=\"btn btn-default tablePaginationButton\" data-table-page=\"{{ table.lastPage }}\">
            {{ table.lastPage }}
        </a>
    {% endif %}

    {# next page #}
    <a href=\"#\" class=\"btn btn-default tablePaginationButton {% if table.page == table.lastPage or table.lastPage==0 %}disabled{% endif %}\" data-table-page=\"{{ table.page+1 }}\">
        {{ \"kiliktable.next\"|trans }} <span class=\"glyphicon glyphicon-arrow-right\"></span>
    </a>
{% endif %}
", "@Home/table/_paginationNumbers.html.twig", "/home/nicolas/blog/src/HomeBundle/Resources/views/table/_paginationNumbers.html.twig");
    }
}
