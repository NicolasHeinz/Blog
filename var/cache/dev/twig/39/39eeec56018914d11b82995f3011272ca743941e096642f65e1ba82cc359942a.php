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

/* HomeBundle:t:_paginationNumbers.html.twig */
class __TwigTemplate_3609f3a52e06291d72d68ec8a60b2bcf85b7423afc1d613b141b0ca320994af6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "HomeBundle:t:_paginationNumbers.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "HomeBundle:t:_paginationNumbers.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((isset($context["tableRenderPagination"]) || array_key_exists("tableRenderPagination", $context))) {
            // line 4
            echo "    ";
            // line 5
            echo "    <a href=\"#\" class=\"btn btn-default tablePaginationButton ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 5, $this->source); })()), "page", [], "any", false, false, false, 5) < 2)) {
                echo "disabled";
            }
            echo "\" data-table-page=\"";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 5, $this->source); })()), "page", [], "any", false, false, false, 5) - 1), "html", null, true);
            echo "\">
        <span class=\"glyphicon glyphicon-arrow-left\"></span> ";
            // line 6
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kiliktable.previous"), "html", null, true);
            echo "
    </a>

    ";
            // line 10
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 10, $this->source); })()), "page", [], "any", false, false, false, 10) > 2)) {
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
            if ((twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 17, $this->source); })()), "page", [], "any", false, false, false, 17) > 3)) {
                // line 18
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 18, $this->source); })()), "page", [], "any", false, false, false, 18) == 4)) {
                    // line 19
                    echo "            <a href=\"#\" class=\"btn btn-default tablePaginationButton\" data-table-page=\"";
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 19, $this->source); })()), "page", [], "any", false, false, false, 19) - 2), "html", null, true);
                    echo "\">
                ";
                    // line 20
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 20, $this->source); })()), "page", [], "any", false, false, false, 20) - 2), "html", null, true);
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
            if ((twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 30, $this->source); })()), "page", [], "any", false, false, false, 30) > 1)) {
                // line 31
                echo "        <a href=\"#\" class=\"btn btn-default tablePaginationButton\" data-table-page=\"";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 31, $this->source); })()), "page", [], "any", false, false, false, 31) - 1), "html", null, true);
                echo "\">
            ";
                // line 32
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 32, $this->source); })()), "page", [], "any", false, false, false, 32) - 1), "html", null, true);
                echo "
        </a>
    ";
            }
            // line 35
            echo "
    ";
            // line 37
            echo "    <a href=\"#\" class=\"btn btn-default tablePaginationButton active disabled\" data-table-page=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 37, $this->source); })()), "page", [], "any", false, false, false, 37), "html", null, true);
            echo "\">
        ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 38, $this->source); })()), "page", [], "any", false, false, false, 38), "html", null, true);
            echo "
    </a>

    ";
            // line 42
            echo "    ";
            if (((twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 42, $this->source); })()), "lastPage", [], "any", false, false, false, 42) - twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 42, $this->source); })()), "page", [], "any", false, false, false, 42)) > 0)) {
                // line 43
                echo "        <a href=\"#\" class=\"btn btn-default tablePaginationButton\" data-table-page=\"";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 43, $this->source); })()), "page", [], "any", false, false, false, 43) + 1), "html", null, true);
                echo "\">
            ";
                // line 44
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 44, $this->source); })()), "page", [], "any", false, false, false, 44) + 1), "html", null, true);
                echo "
        </a>
    ";
            }
            // line 47
            echo "
    ";
            // line 49
            echo "    ";
            if (((twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 49, $this->source); })()), "lastPage", [], "any", false, false, false, 49) - twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 49, $this->source); })()), "page", [], "any", false, false, false, 49)) > 2)) {
                // line 50
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 50, $this->source); })()), "lastPage", [], "any", false, false, false, 50) - twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 50, $this->source); })()), "page", [], "any", false, false, false, 50)) == 3)) {
                    // line 51
                    echo "            <a href=\"#\" class=\"btn btn-default tablePaginationButton\" data-table-page=\"";
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 51, $this->source); })()), "page", [], "any", false, false, false, 51) + 2), "html", null, true);
                    echo "\">
                ";
                    // line 52
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 52, $this->source); })()), "page", [], "any", false, false, false, 52) + 2), "html", null, true);
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
            if (((twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 62, $this->source); })()), "lastPage", [], "any", false, false, false, 62) - twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 62, $this->source); })()), "page", [], "any", false, false, false, 62)) > 1)) {
                // line 63
                echo "        <a href=\"#\" class=\"btn btn-default tablePaginationButton\" data-table-page=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 63, $this->source); })()), "lastPage", [], "any", false, false, false, 63), "html", null, true);
                echo "\">
            ";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 64, $this->source); })()), "lastPage", [], "any", false, false, false, 64), "html", null, true);
                echo "
        </a>
    ";
            }
            // line 67
            echo "
    ";
            // line 69
            echo "    <a href=\"#\" class=\"btn btn-default tablePaginationButton ";
            if (((twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 69, $this->source); })()), "page", [], "any", false, false, false, 69) == twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 69, $this->source); })()), "lastPage", [], "any", false, false, false, 69)) || (twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 69, $this->source); })()), "lastPage", [], "any", false, false, false, 69) == 0))) {
                echo "disabled";
            }
            echo "\" data-table-page=\"";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 69, $this->source); })()), "page", [], "any", false, false, false, 69) + 1), "html", null, true);
            echo "\">
        ";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kiliktable.next"), "html", null, true);
            echo " <span class=\"glyphicon glyphicon-arrow-right\"></span>
    </a>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "HomeBundle:t:_paginationNumbers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 70,  197 => 69,  194 => 67,  188 => 64,  183 => 63,  180 => 62,  177 => 60,  174 => 59,  168 => 55,  162 => 52,  157 => 51,  154 => 50,  151 => 49,  148 => 47,  142 => 44,  137 => 43,  134 => 42,  128 => 38,  123 => 37,  120 => 35,  114 => 32,  109 => 31,  106 => 30,  103 => 28,  100 => 27,  94 => 23,  88 => 20,  83 => 19,  80 => 18,  77 => 17,  74 => 15,  68 => 11,  65 => 10,  59 => 6,  50 => 5,  48 => 4,  46 => 3,  43 => 2,);
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
", "HomeBundle:t:_paginationNumbers.html.twig", "/home/nicolas/Documentos/Blog/src/HomeBundle/Resources/views/t/_paginationNumbers.html.twig");
    }
}
