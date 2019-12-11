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

/* KilikTableBundle::_condensedTable.html.twig */
class __TwigTemplate_4a8dbaa124f871d57f0fe66bd6cac6ecba8b1017d9e0d35fc56647b2dd2b572d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'tableBeforePanel' => [$this, 'block_tableBeforePanel'],
            'tableHead' => [$this, 'block_tableHead'],
            'tableHeadStdColumns' => [$this, 'block_tableHeadStdColumns'],
            'tableHeadStdFilters' => [$this, 'block_tableHeadStdFilters'],
            'tableBody' => [$this, 'block_tableBody'],
            'tableBodyStdColumns' => [$this, 'block_tableBodyStdColumns'],
            'tableStats' => [$this, 'block_tableStats'],
            'tableStatsAjax' => [$this, 'block_tableStatsAjax'],
            'tablePagination' => [$this, 'block_tablePagination'],
            'tablePaginationAjax' => [$this, 'block_tablePaginationAjax'],
            'tableAfterPanel' => [$this, 'block_tableAfterPanel'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
";
        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "formView", [], "any", false, false, false, 4), 'form_start');
        echo "
";
        // line 5
        $this->displayBlock('tableBeforePanel', $context, $blocks);
        // line 7
        echo "<table class=\"table table-hover table-striped table-condensed\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "id", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
    <thead>
    ";
        // line 9
        $this->displayBlock('tableHead', $context, $blocks);
        // line 27
        echo "    </thead>
    <tbody id=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "bodyId", [], "any", false, false, false, 28), "html", null, true);
        echo "\">
    ";
        // line 29
        $this->displayBlock('tableBody', $context, $blocks);
        // line 42
        echo "    </tbody>
</table>

<div class=\"row\">
    <div class=\"col-sm-6\">
        ";
        // line 47
        $this->displayBlock('tableStats', $context, $blocks);
        // line 54
        echo "    </div>

    <div class=\"col-sm-6\">
    ";
        // line 57
        $this->displayBlock('tablePagination', $context, $blocks);
        // line 64
        echo "    </div>
</div>

";
        // line 67
        $this->displayBlock('tableAfterPanel', $context, $blocks);
        // line 69
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "formView", [], "any", false, false, false, 69), 'form_end');
        echo "
";
    }

    // line 5
    public function block_tableBeforePanel($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 9
    public function block_tableHead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "        <tr>
            ";
        // line 11
        $this->displayBlock('tableHeadStdColumns', $context, $blocks);
        // line 16
        echo "        </tr>
        ";
        // line 17
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "columns", [], "any", false, false, false, 17)) > 0)) {
            // line 18
            echo "            <tr>
                ";
            // line 19
            $this->displayBlock('tableHeadStdFilters', $context, $blocks);
            // line 24
            echo "            </tr>
        ";
        }
        // line 26
        echo "    ";
    }

    // line 11
    public function block_tableHeadStdColumns($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "columns", [], "any", false, false, false, 12));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 13
            echo "                    ";
            $this->loadTemplate("@KilikTable/_columnName.html.twig", "KilikTableBundle::_condensedTable.html.twig", 13)->display($context);
            // line 14
            echo "                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "            ";
    }

    // line 19
    public function block_tableHeadStdFilters($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "columns", [], "any", false, false, false, 20));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 21
            echo "                        ";
            $this->loadTemplate("@KilikTable/_columnFilter.html.twig", "KilikTableBundle::_condensedTable.html.twig", 21)->display($context);
            // line 22
            echo "                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                ";
    }

    // line 29
    public function block_tableBody($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "        ";
        if ((isset($context["tableRenderBody"]) || array_key_exists("tableRenderBody", $context))) {
            // line 31
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 32
                echo "                <tr>
                    ";
                // line 33
                $this->displayBlock('tableBodyStdColumns', $context, $blocks);
                // line 38
                echo "                </tr>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "        ";
        }
        // line 41
        echo "    ";
    }

    // line 33
    public function block_tableBodyStdColumns($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "columns", [], "any", false, false, false, 34));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 35
            echo "                            ";
            $this->loadTemplate("@KilikTable/_columnCell.html.twig", "KilikTableBundle::_condensedTable.html.twig", 35)->display($context);
            // line 36
            echo "                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                    ";
    }

    // line 47
    public function block_tableStats($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "            <div id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "id", [], "any", false, false, false, 48), "html", null, true);
        echo "_stats\">
                ";
        // line 49
        $this->displayBlock('tableStatsAjax', $context, $blocks);
        // line 52
        echo "            </div>
        ";
    }

    // line 49
    public function block_tableStatsAjax($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "                    ";
        $this->loadTemplate("@KilikTable/_stats.html.twig", "KilikTableBundle::_condensedTable.html.twig", 50)->display($context);
        // line 51
        echo "                ";
    }

    // line 57
    public function block_tablePagination($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "        <div id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "id", [], "any", false, false, false, 58), "html", null, true);
        echo "_pagination\" class=\"btn-group pull-right\">
            ";
        // line 59
        $this->displayBlock('tablePaginationAjax', $context, $blocks);
        // line 62
        echo "        </div>
    ";
    }

    // line 59
    public function block_tablePaginationAjax($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "                ";
        $this->loadTemplate("@KilikTable/_paginationNumbersIcons.html.twig", "KilikTableBundle::_condensedTable.html.twig", 60)->display($context);
        // line 61
        echo "            ";
    }

    // line 67
    public function block_tableAfterPanel($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "KilikTableBundle::_condensedTable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  371 => 67,  367 => 61,  364 => 60,  360 => 59,  355 => 62,  353 => 59,  348 => 58,  344 => 57,  340 => 51,  337 => 50,  333 => 49,  328 => 52,  326 => 49,  321 => 48,  317 => 47,  313 => 37,  299 => 36,  296 => 35,  278 => 34,  274 => 33,  270 => 41,  267 => 40,  252 => 38,  250 => 33,  247 => 32,  229 => 31,  226 => 30,  222 => 29,  218 => 23,  204 => 22,  201 => 21,  183 => 20,  179 => 19,  175 => 15,  161 => 14,  158 => 13,  140 => 12,  136 => 11,  132 => 26,  128 => 24,  126 => 19,  123 => 18,  121 => 17,  118 => 16,  116 => 11,  113 => 10,  109 => 9,  103 => 5,  97 => 69,  95 => 67,  90 => 64,  88 => 57,  83 => 54,  81 => 47,  74 => 42,  72 => 29,  68 => 28,  65 => 27,  63 => 9,  57 => 7,  55 => 5,  51 => 4,  48 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "KilikTableBundle::_condensedTable.html.twig", "/home/nicolas/Documentos/Blog/vendor/kilik/table/Resources/views/_condensedTable.html.twig");
    }
}
