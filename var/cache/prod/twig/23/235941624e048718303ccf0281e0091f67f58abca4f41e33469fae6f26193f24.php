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

/* HomeBundle:t:_defaultTableAlt.html.twig */
class __TwigTemplate_c54ea2760f9d0957d1d6058d3bf61a47316a3c3e7e8fd69278cdbd014a2b0cc2 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 2
        $_trait_0 = $this->loadTemplate("@KilikTable/_blocks.html.twig", "HomeBundle:t:_defaultTableAlt.html.twig", 2);
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
        $this->loadTemplate("@KilikTable/_setup.html.twig", "HomeBundle:t:_defaultTableAlt.html.twig", 20)->display($context);
        // line 21
        echo "        ";
        $this->loadTemplate("@KilikTable/_rowsPerPage.html.twig", "HomeBundle:t:_defaultTableAlt.html.twig", 21)->display($context);
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
        // line 53
        echo "            </thead>
            <tbody id=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "bodyId", [], "any", false, false, false, 54), "html", null, true);
        echo "\">
                ";
        // line 55
        $this->displayBlock('tableBody', $context, $blocks);
        // line 76
        echo "            </tbody>
        </table>
    </div>
</div>
<div class=\"col-md-6\">
    ";
        // line 81
        $this->displayBlock('tableStats', $context, $blocks);
        // line 88
        echo "</div>
<div class=\"col-md-6\">
    <span class=\"pull-right\">
        ";
        // line 91
        $this->displayBlock('tablePagination', $context, $blocks);
        // line 98
        echo "    </span>
</div>
";
        // line 100
        $this->displayBlock('tableAfterPanel', $context, $blocks);
        // line 102
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "formView", [], "any", false, false, false, 102), 'form_end');
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
        // line 30
        echo "                        ";
        $this->displayBlock('tableHeadMassActionsColumn', $context, $blocks);
        // line 33
        echo "                        ";
        $this->displayBlock('tableHeadStdColumns', $context, $blocks);
        // line 38
        echo "                    </tr>
                    ";
        // line 40
        echo "                    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "columns", [], "any", false, false, false, 40)) > 0)) {
            // line 41
            echo "                        <tr>
                            ";
            // line 42
            $this->displayBlock('tableFilterMassActionsColumn', $context, $blocks);
            // line 45
            echo "                            ";
            $this->displayBlock('tableHeadStdFilters', $context, $blocks);
            // line 50
            echo "                        </tr>
                    ";
        }
        // line 52
        echo "                ";
    }

    // line 30
    public function block_tableHeadMassActionsColumn($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "                            ";
        $this->displayBlock("parent_tableHeadMassActionsColumn", $context, $blocks);
        echo "
                        ";
    }

    // line 33
    public function block_tableHeadStdColumns($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "                            ";
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
            echo "                                ";
            $this->loadTemplate("@KilikTable/_columnName.html.twig", "HomeBundle:t:_defaultTableAlt.html.twig", 35)->display($context);
            // line 36
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
        // line 37
        echo "                        ";
    }

    // line 42
    public function block_tableFilterMassActionsColumn($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "                                ";
        $this->displayBlock("parent_tableFilterMassActionsColumn", $context, $blocks);
        echo "
                            ";
    }

    // line 45
    public function block_tableHeadStdFilters($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "columns", [], "any", false, false, false, 46));
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
            // line 47
            echo "                                    ";
            $this->loadTemplate("@KilikTable/_columnFilter.html.twig", "HomeBundle:t:_defaultTableAlt.html.twig", 47)->display($context);
            // line 48
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
        // line 49
        echo "                            ";
    }

    // line 55
    public function block_tableBody($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "                    ";
        if ((isset($context["tableRenderBody"]) || array_key_exists("tableRenderBody", $context))) {
            // line 57
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
                // line 58
                echo "                            <tr>
                                ";
                // line 59
                $this->displayBlock('tableBodyMassActionsColumn', $context, $blocks);
                // line 62
                echo "                                ";
                $this->displayBlock('tableBodyStdColumns', $context, $blocks);
                // line 72
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
            // line 74
            echo "                    ";
        }
        // line 75
        echo "                ";
    }

    // line 59
    public function block_tableBodyMassActionsColumn($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "                                    ";
        $this->displayBlock("parent_tableBodyMassActionsColumn", $context, $blocks);
        echo "
                                ";
    }

    // line 62
    public function block_tableBodyStdColumns($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "                                    <td>
                                        <a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "object", [], "any", false, false, false, 64), "id", [], "any", false, false, false, 64)]), "html", null, true);
        echo "\">
                                            <i class=\"fa fa-search\">Ver</i>
                                        </a>
                                    </td>
                                    ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "columns", [], "any", false, false, false, 68));
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
            // line 69
            echo "                                        ";
            $this->loadTemplate("@KilikTable/_columnCell.html.twig", "HomeBundle:t:_defaultTableAlt.html.twig", 69)->display($context);
            // line 70
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
        // line 71
        echo "                                ";
    }

    // line 81
    public function block_tableStats($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 82
        echo "        <div id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "id", [], "any", false, false, false, 82), "html", null, true);
        echo "_stats\">
            ";
        // line 83
        $this->displayBlock('tableStatsAjax', $context, $blocks);
        // line 86
        echo "        </div>
    ";
    }

    // line 83
    public function block_tableStatsAjax($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 84
        echo "                ";
        $this->loadTemplate("@KilikTable/_stats.html.twig", "HomeBundle:t:_defaultTableAlt.html.twig", 84)->display($context);
        // line 85
        echo "            ";
    }

    // line 91
    public function block_tablePagination($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 92
        echo "            <div id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "id", [], "any", false, false, false, 92), "html", null, true);
        echo "_pagination\" class=\"btn-group\">
                ";
        // line 93
        $this->displayBlock('tablePaginationAjax', $context, $blocks);
        // line 96
        echo "            </div>
        ";
    }

    // line 93
    public function block_tablePaginationAjax($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 94
        echo "                    ";
        $this->loadTemplate("@KilikTable/_paginationNumbers.html.twig", "HomeBundle:t:_defaultTableAlt.html.twig", 94)->display($context);
        // line 95
        echo "                ";
    }

    // line 100
    public function block_tableAfterPanel($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "HomeBundle:t:_defaultTableAlt.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  484 => 100,  480 => 95,  477 => 94,  473 => 93,  468 => 96,  466 => 93,  461 => 92,  457 => 91,  453 => 85,  450 => 84,  446 => 83,  441 => 86,  439 => 83,  434 => 82,  430 => 81,  426 => 71,  412 => 70,  409 => 69,  392 => 68,  385 => 64,  382 => 63,  378 => 62,  371 => 60,  367 => 59,  363 => 75,  360 => 74,  345 => 72,  342 => 62,  340 => 59,  337 => 58,  319 => 57,  316 => 56,  312 => 55,  308 => 49,  294 => 48,  291 => 47,  273 => 46,  269 => 45,  262 => 43,  258 => 42,  254 => 37,  240 => 36,  237 => 35,  219 => 34,  215 => 33,  208 => 31,  204 => 30,  200 => 52,  196 => 50,  193 => 45,  191 => 42,  188 => 41,  185 => 40,  182 => 38,  179 => 33,  176 => 30,  173 => 28,  169 => 27,  164 => 15,  160 => 14,  154 => 9,  148 => 102,  146 => 100,  142 => 98,  140 => 91,  135 => 88,  133 => 81,  126 => 76,  124 => 55,  120 => 54,  117 => 53,  115 => 27,  110 => 25,  105 => 22,  102 => 21,  99 => 20,  95 => 17,  93 => 14,  88 => 11,  86 => 9,  82 => 8,  30 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "HomeBundle:t:_defaultTableAlt.html.twig", "/home/nicolas/Documentos/Blog/src/HomeBundle/Resources/views/t/_defaultTableAlt.html.twig");
    }
}
