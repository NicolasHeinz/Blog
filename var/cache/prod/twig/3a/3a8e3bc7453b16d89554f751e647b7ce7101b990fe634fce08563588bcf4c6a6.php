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
class __TwigTemplate_bbe206ffe4f388eff6d29606ee6c68055eb4a3b16a8fc4da7030c4b2a0280178 extends \Twig\Template
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
            echo "    ";
            // line 5
            echo "    <a href=\"#\" class=\"btn btn-default tablePaginationButton ";
            if ((twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "page", [], "any", false, false, false, 5) < 2)) {
                echo "disabled";
            }
            echo "\" data-table-page=\"";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "page", [], "any", false, false, false, 5) - 1), "html", null, true);
            echo "\">
        <span class=\"glyphicon glyphicon-arrow-left\"></span> ";
            // line 6
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kiliktable.previous"), "html", null, true);
            echo "
    </a>

    ";
            // line 10
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "page", [], "any", false, false, false, 10) > 2)) {
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
            if ((twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "page", [], "any", false, false, false, 17) > 3)) {
                // line 18
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "page", [], "any", false, false, false, 18) == 4)) {
                    // line 19
                    echo "            <a href=\"#\" class=\"btn btn-default tablePaginationButton\" data-table-page=\"";
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "page", [], "any", false, false, false, 19) - 2), "html", null, true);
                    echo "\">
                ";
                    // line 20
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "page", [], "any", false, false, false, 20) - 2), "html", null, true);
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
            if ((twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "page", [], "any", false, false, false, 30) > 1)) {
                // line 31
                echo "        <a href=\"#\" class=\"btn btn-default tablePaginationButton\" data-table-page=\"";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "page", [], "any", false, false, false, 31) - 1), "html", null, true);
                echo "\">
            ";
                // line 32
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "page", [], "any", false, false, false, 32) - 1), "html", null, true);
                echo "
        </a>
    ";
            }
            // line 35
            echo "
    ";
            // line 37
            echo "    <a href=\"#\" class=\"btn btn-default tablePaginationButton active disabled\" data-table-page=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "page", [], "any", false, false, false, 37), "html", null, true);
            echo "\">
        ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "page", [], "any", false, false, false, 38), "html", null, true);
            echo "
    </a>

    ";
            // line 42
            echo "    ";
            if (((twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "lastPage", [], "any", false, false, false, 42) - twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "page", [], "any", false, false, false, 42)) > 0)) {
                // line 43
                echo "        <a href=\"#\" class=\"btn btn-default tablePaginationButton\" data-table-page=\"";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "page", [], "any", false, false, false, 43) + 1), "html", null, true);
                echo "\">
            ";
                // line 44
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "page", [], "any", false, false, false, 44) + 1), "html", null, true);
                echo "
        </a>
    ";
            }
            // line 47
            echo "
    ";
            // line 49
            echo "    ";
            if (((twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "lastPage", [], "any", false, false, false, 49) - twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "page", [], "any", false, false, false, 49)) > 2)) {
                // line 50
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "lastPage", [], "any", false, false, false, 50) - twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "page", [], "any", false, false, false, 50)) == 3)) {
                    // line 51
                    echo "            <a href=\"#\" class=\"btn btn-default tablePaginationButton\" data-table-page=\"";
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "page", [], "any", false, false, false, 51) + 2), "html", null, true);
                    echo "\">
                ";
                    // line 52
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "page", [], "any", false, false, false, 52) + 2), "html", null, true);
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
            if (((twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "lastPage", [], "any", false, false, false, 62) - twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "page", [], "any", false, false, false, 62)) > 1)) {
                // line 63
                echo "        <a href=\"#\" class=\"btn btn-default tablePaginationButton\" data-table-page=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "lastPage", [], "any", false, false, false, 63), "html", null, true);
                echo "\">
            ";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "lastPage", [], "any", false, false, false, 64), "html", null, true);
                echo "
        </a>
    ";
            }
            // line 67
            echo "
    ";
            // line 69
            echo "    <a href=\"#\" class=\"btn btn-default tablePaginationButton ";
            if (((twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "page", [], "any", false, false, false, 69) == twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "lastPage", [], "any", false, false, false, 69)) || (twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "lastPage", [], "any", false, false, false, 69) == 0))) {
                echo "disabled";
            }
            echo "\" data-table-page=\"";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "page", [], "any", false, false, false, 69) + 1), "html", null, true);
            echo "\">
        ";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kiliktable.next"), "html", null, true);
            echo " <span class=\"glyphicon glyphicon-arrow-right\"></span>
    </a>
";
        }
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
        return array (  200 => 70,  191 => 69,  188 => 67,  182 => 64,  177 => 63,  174 => 62,  171 => 60,  168 => 59,  162 => 55,  156 => 52,  151 => 51,  148 => 50,  145 => 49,  142 => 47,  136 => 44,  131 => 43,  128 => 42,  122 => 38,  117 => 37,  114 => 35,  108 => 32,  103 => 31,  100 => 30,  97 => 28,  94 => 27,  88 => 23,  82 => 20,  77 => 19,  74 => 18,  71 => 17,  68 => 15,  62 => 11,  59 => 10,  53 => 6,  44 => 5,  42 => 4,  40 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "HomeBundle:t:_paginationNumbers.html.twig", "/home/nicolas/Documentos/Blog/src/HomeBundle/Resources/views/t/_paginationNumbers.html.twig");
    }
}
