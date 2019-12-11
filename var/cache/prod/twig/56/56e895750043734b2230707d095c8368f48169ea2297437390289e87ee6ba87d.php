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

/* KilikTableBundle::_defaultTableAlt.html.twig */
class __TwigTemplate_eba7ab0b72c71a4d86cf6ba7101ef6686cfb372d617a73d83854e4472201db07 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 2
        $_trait_0 = $this->loadTemplate("@KilikTable/_blocks.html.twig", "KilikTableBundle::_defaultTableAlt.html.twig", 2);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."@KilikTable/_blocks.html.twig".'" cannot be used as a trait.', 2, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["tableHeadMassActionsColumn"])) {
            throw new RuntimeError('Block "tableHeadMassActionsColumn" is not defined in trait "@KilikTable/_blocks.html.twig".', 2, $this->source);
        }

        $_trait_0_blocks["parent_tableHeadMassActionsColumn"] = $_trait_0_blocks["tableHeadMassActionsColumn"]; unset($_trait_0_blocks["tableHeadMassActionsColumn"]);

        if (!isset($_trait_0_blocks["tableFilterMassActionsColumn"])) {
            throw new RuntimeError('Block "tableFilterMassActionsColumn" is not defined in trait "@KilikTable/_blocks.html.twig".', 2, $this->source);
        }

        $_trait_0_blocks["parent_tableFilterMassActionsColumn"] = $_trait_0_blocks["tableFilterMassActionsColumn"]; unset($_trait_0_blocks["tableFilterMassActionsColumn"]);

        if (!isset($_trait_0_blocks["tableBodyMassActionsColumn"])) {
            throw new RuntimeError('Block "tableBodyMassActionsColumn" is not defined in trait "@KilikTable/_blocks.html.twig".', 2, $this->source);
        }

        $_trait_0_blocks["parent_tableBodyMassActionsColumn"] = $_trait_0_blocks["tableBodyMassActionsColumn"]; unset($_trait_0_blocks["tableBodyMassActionsColumn"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'tableBeforePanel' => [$this, 'block_tableBeforePanel'],
                'tableTitle' => [$this, 'block_tableTitle'],
                'tableHead' => [$this, 'block_tableHead'],
                'tableHeadMassActionsColumn' => [$this, 'block_tableHeadMassActionsColumn'],
                'tableHeadStdColumns' => [$this, 'block_tableHeadStdColumns'],
                'tableFilterMassActionsColumn' => [$this, 'block_tableFilterMassActionsColumn'],
                'tableHeadStdFilters' => [$this, 'block_tableHeadStdFilters'],
                'tableBody' => [$this, 'block_tableBody'],
                'tableBodyMassActionsColumn' => [$this, 'block_tableBodyMassActionsColumn'],
                'tableBodyStdColumns' => [$this, 'block_tableBodyStdColumns'],
                'tableStats' => [$this, 'block_tableStats'],
                'tableStatsAjax' => [$this, 'block_tableStatsAjax'],
                'tablePagination' => [$this, 'block_tablePagination'],
                'tablePaginationAjax' => [$this, 'block_tablePaginationAjax'],
                'tableAfterPanel' => [$this, 'block_tableAfterPanel'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "formView", [], "any", false, false, false, 8), 'form_start');
        echo "
";
        // line 9
        $this->displayBlock('tableBeforePanel', $context, $blocks);
        // line 11
        echo "<div class=\"panel panel-info\">
    <div class=\"panel-heading\">
        <div class=\"panel-title\">
            ";
        // line 14
        $this->displayBlock('tableTitle', $context, $blocks);
        // line 17
        echo "        </div>

        ";
        // line 20
        echo "        ";
        $this->loadTemplate("@KilikTable/_setup.html.twig", "KilikTableBundle::_defaultTableAlt.html.twig", 20)->display($context);
        // line 21
        echo "        ";
        $this->loadTemplate("@KilikTable/_rowsPerPage.html.twig", "KilikTableBundle::_defaultTableAlt.html.twig", 21)->display($context);
        // line 22
        echo "
    </div>
    <div class=\"panel-body table-responsive\">
        <table class=\"table table-hover table-striped table-bordered\" id=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "id", [], "any", false, false, false, 25), "html", null, true);
        echo "\">
            <thead>
                ";
        // line 27
        $this->displayBlock('tableHead', $context, $blocks);
        // line 54
        echo "            </thead>
            <tbody id=\"";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "bodyId", [], "any", false, false, false, 55), "html", null, true);
        echo "\">
                ";
        // line 56
        $this->displayBlock('tableBody', $context, $blocks);
        // line 72
        echo "            </tbody>
        </table>
    </div>
</div>
<div class=\"col-md-6\">
    ";
        // line 77
        $this->displayBlock('tableStats', $context, $blocks);
        // line 84
        echo "</div>
<div class=\"col-md-6\">
    <span class=\"pull-right\">
        ";
        // line 87
        $this->displayBlock('tablePagination', $context, $blocks);
        // line 94
        echo "    </span>
</div>
";
        // line 96
        $this->displayBlock('tableAfterPanel', $context, $blocks);
        // line 98
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "formView", [], "any", false, false, false, 98), 'form_end');
        echo "
";
    }

    // line 9
    public function block_tableBeforePanel($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 14
    public function block_tableTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "                Default title
            ";
    }

    // line 27
    public function block_tableHead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "                    <tr>

                        ";
        // line 31
        echo "                        ";
        $this->displayBlock('tableHeadMassActionsColumn', $context, $blocks);
        // line 34
        echo "                        ";
        $this->displayBlock('tableHeadStdColumns', $context, $blocks);
        // line 39
        echo "                    </tr>
                    ";
        // line 41
        echo "                    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "columns", [], "any", false, false, false, 41)) > 0)) {
            // line 42
            echo "                        <tr>
                            ";
            // line 43
            $this->displayBlock('tableFilterMassActionsColumn', $context, $blocks);
            // line 46
            echo "                            ";
            $this->displayBlock('tableHeadStdFilters', $context, $blocks);
            // line 51
            echo "                        </tr>
                    ";
        }
        // line 53
        echo "                ";
    }

    // line 31
    public function block_tableHeadMassActionsColumn($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "                            ";
        $this->displayBlock("parent_tableHeadMassActionsColumn", $context, $blocks);
        echo "
                        ";
    }

    // line 34
    public function block_tableHeadStdColumns($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "columns", [], "any", false, false, false, 35));
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
            // line 36
            echo "                                ";
            $this->loadTemplate("@KilikTable/_columnName.html.twig", "KilikTableBundle::_defaultTableAlt.html.twig", 36)->display($context);
            // line 37
            echo "                            ";
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
        // line 38
        echo "                        ";
    }

    // line 43
    public function block_tableFilterMassActionsColumn($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "                                ";
        $this->displayBlock("parent_tableFilterMassActionsColumn", $context, $blocks);
        echo "
                            ";
    }

    // line 46
    public function block_tableHeadStdFilters($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "columns", [], "any", false, false, false, 47));
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
            // line 48
            echo "                                    ";
            $this->loadTemplate("@KilikTable/_columnFilter.html.twig", "KilikTableBundle::_defaultTableAlt.html.twig", 48)->display($context);
            // line 49
            echo "                                ";
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
        // line 50
        echo "                            ";
    }

    // line 56
    public function block_tableBody($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "                    ";
        if ((isset($context["tableRenderBody"]) || array_key_exists("tableRenderBody", $context))) {
            // line 58
            echo "                        ";
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
                // line 59
                echo "                            <tr>
                                ";
                // line 60
                $this->displayBlock('tableBodyMassActionsColumn', $context, $blocks);
                // line 63
                echo "                                ";
                $this->displayBlock('tableBodyStdColumns', $context, $blocks);
                // line 68
                echo "                            </tr>
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
            // line 70
            echo "                    ";
        }
        // line 71
        echo "                ";
    }

    // line 60
    public function block_tableBodyMassActionsColumn($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        echo "                                    ";
        $this->displayBlock("parent_tableBodyMassActionsColumn", $context, $blocks);
        echo "
                                ";
    }

    // line 63
    public function block_tableBodyStdColumns($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 64
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "columns", [], "any", false, false, false, 64));
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
            // line 65
            echo "                                        ";
            $this->loadTemplate("@KilikTable/_columnCell.html.twig", "KilikTableBundle::_defaultTableAlt.html.twig", 65)->display($context);
            // line 66
            echo "                                    ";
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
        // line 67
        echo "                                ";
    }

    // line 77
    public function block_tableStats($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        echo "        <div id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "id", [], "any", false, false, false, 78), "html", null, true);
        echo "_stats\">
            ";
        // line 79
        $this->displayBlock('tableStatsAjax', $context, $blocks);
        // line 82
        echo "        </div>
    ";
    }

    // line 79
    public function block_tableStatsAjax($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 80
        echo "                ";
        $this->loadTemplate("@KilikTable/_stats.html.twig", "KilikTableBundle::_defaultTableAlt.html.twig", 80)->display($context);
        // line 81
        echo "            ";
    }

    // line 87
    public function block_tablePagination($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 88
        echo "            <div id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "id", [], "any", false, false, false, 88), "html", null, true);
        echo "_pagination\" class=\"btn-group\">
                ";
        // line 89
        $this->displayBlock('tablePaginationAjax', $context, $blocks);
        // line 92
        echo "            </div>
        ";
    }

    // line 89
    public function block_tablePaginationAjax($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 90
        echo "                    ";
        $this->loadTemplate("@KilikTable/_paginationNumbers.html.twig", "KilikTableBundle::_defaultTableAlt.html.twig", 90)->display($context);
        // line 91
        echo "                ";
    }

    // line 96
    public function block_tableAfterPanel($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "KilikTableBundle::_defaultTableAlt.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  476 => 96,  472 => 91,  469 => 90,  465 => 89,  460 => 92,  458 => 89,  453 => 88,  449 => 87,  445 => 81,  442 => 80,  438 => 79,  433 => 82,  431 => 79,  426 => 78,  422 => 77,  418 => 67,  404 => 66,  401 => 65,  383 => 64,  379 => 63,  372 => 61,  368 => 60,  364 => 71,  361 => 70,  346 => 68,  343 => 63,  341 => 60,  338 => 59,  320 => 58,  317 => 57,  313 => 56,  309 => 50,  295 => 49,  292 => 48,  274 => 47,  270 => 46,  263 => 44,  259 => 43,  255 => 38,  241 => 37,  238 => 36,  220 => 35,  216 => 34,  209 => 32,  205 => 31,  201 => 53,  197 => 51,  194 => 46,  192 => 43,  189 => 42,  186 => 41,  183 => 39,  180 => 34,  177 => 31,  173 => 28,  169 => 27,  164 => 15,  160 => 14,  154 => 9,  148 => 98,  146 => 96,  142 => 94,  140 => 87,  135 => 84,  133 => 77,  126 => 72,  124 => 56,  120 => 55,  117 => 54,  115 => 27,  110 => 25,  105 => 22,  102 => 21,  99 => 20,  95 => 17,  93 => 14,  88 => 11,  86 => 9,  82 => 8,  30 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "KilikTableBundle::_defaultTableAlt.html.twig", "/home/nicolas/Documentos/Blog/vendor/kilik/table/Resources/views/_defaultTableAlt.html.twig");
    }
}
