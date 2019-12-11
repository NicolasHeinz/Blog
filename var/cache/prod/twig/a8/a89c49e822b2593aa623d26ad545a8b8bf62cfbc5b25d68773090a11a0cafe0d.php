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

/* KilikTableBundle::_defaultTable.html.twig */
class __TwigTemplate_72530f670cf5a1c2c4e976a2dcdc7209fba7892659a721ad3b24bb2d58c780b5 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 2
        $_trait_0 = $this->loadTemplate("@KilikTable/_blocks.html.twig", "KilikTableBundle::_defaultTable.html.twig", 2);
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
                'tablePagination' => [$this, 'block_tablePagination'],
                'tablePaginationAjax' => [$this, 'block_tablePaginationAjax'],
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
        $this->displayBlock('tablePagination', $context, $blocks);
        // line 21
        echo "            ";
        $this->displayBlock('tableTitle', $context, $blocks);
        // line 24
        echo "        </div>
    </div>
    <div class=\"panel-body table-responsive\">
        <table class=\"table table-hover table-striped table-bordered\" id=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "id", [], "any", false, false, false, 27), "html", null, true);
        echo "\">
            <thead>
                ";
        // line 29
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
        // line 71
        echo "            </tbody>
        </table>
    </div>
    <div class=\"panel-footer\">
        ";
        // line 75
        $this->displayBlock('tableStats', $context, $blocks);
        // line 82
        echo "    </div>
</div>
";
        // line 84
        $this->displayBlock('tableAfterPanel', $context, $blocks);
        // line 86
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "formView", [], "any", false, false, false, 86), 'form_end');
        echo "
";
    }

    // line 9
    public function block_tableBeforePanel($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 14
    public function block_tablePagination($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "                <div id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "id", [], "any", false, false, false, 15), "html", null, true);
        echo "_pagination\" class=\"btn-group\">
                    ";
        // line 16
        $this->displayBlock('tablePaginationAjax', $context, $blocks);
        // line 19
        echo "                </div>
            ";
    }

    // line 16
    public function block_tablePaginationAjax($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "                        ";
        $this->loadTemplate("@KilikTable/_paginationNumbersIcons.html.twig", "KilikTableBundle::_defaultTable.html.twig", 17)->display($context);
        // line 18
        echo "                    ";
    }

    // line 21
    public function block_tableTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "                Default title
            ";
    }

    // line 29
    public function block_tableHead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "                    <tr>
                        ";
        // line 31
        $this->displayBlock('tableHeadMassActionsColumn', $context, $blocks);
        // line 34
        echo "                        ";
        $this->displayBlock('tableHeadStdColumns', $context, $blocks);
        // line 39
        echo "                    </tr>
                    ";
        // line 40
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
            $this->loadTemplate("@KilikTable/_columnName.html.twig", "KilikTableBundle::_defaultTable.html.twig", 36)->display($context);
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
            $this->loadTemplate("@KilikTable/_columnFilter.html.twig", "KilikTableBundle::_defaultTable.html.twig", 47)->display($context);
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
                // line 67
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
            // line 69
            echo "                    ";
        }
        // line 70
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
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "columns", [], "any", false, false, false, 63));
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
            // line 64
            echo "                                        ";
            $this->loadTemplate("@KilikTable/_columnCell.html.twig", "KilikTableBundle::_defaultTable.html.twig", 64)->display($context);
            // line 65
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
        // line 66
        echo "                                ";
    }

    // line 75
    public function block_tableStats($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 76
        echo "            <div id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "id", [], "any", false, false, false, 76), "html", null, true);
        echo "_stats\">
                ";
        // line 77
        $this->displayBlock('tableStatsAjax', $context, $blocks);
        // line 80
        echo "            </div>
        ";
    }

    // line 77
    public function block_tableStatsAjax($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        echo "                    ";
        $this->loadTemplate("@KilikTable/_stats.html.twig", "KilikTableBundle::_defaultTable.html.twig", 78)->display($context);
        // line 79
        echo "                ";
    }

    // line 84
    public function block_tableAfterPanel($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "KilikTableBundle::_defaultTable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  458 => 84,  454 => 79,  451 => 78,  447 => 77,  442 => 80,  440 => 77,  435 => 76,  431 => 75,  427 => 66,  413 => 65,  410 => 64,  392 => 63,  388 => 62,  381 => 60,  377 => 59,  373 => 70,  370 => 69,  355 => 67,  352 => 62,  350 => 59,  347 => 58,  329 => 57,  326 => 56,  322 => 55,  318 => 49,  304 => 48,  301 => 47,  283 => 46,  279 => 45,  272 => 43,  268 => 42,  264 => 38,  250 => 37,  247 => 36,  229 => 35,  225 => 34,  218 => 32,  214 => 31,  210 => 52,  206 => 50,  203 => 45,  201 => 42,  198 => 41,  196 => 40,  193 => 39,  190 => 34,  188 => 31,  185 => 30,  181 => 29,  176 => 22,  172 => 21,  168 => 18,  165 => 17,  161 => 16,  156 => 19,  154 => 16,  149 => 15,  145 => 14,  139 => 9,  133 => 86,  131 => 84,  127 => 82,  125 => 75,  119 => 71,  117 => 55,  113 => 54,  110 => 53,  108 => 29,  103 => 27,  98 => 24,  95 => 21,  93 => 14,  88 => 11,  86 => 9,  82 => 8,  30 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "KilikTableBundle::_defaultTable.html.twig", "/home/nicolas/Documentos/Blog/vendor/kilik/table/Resources/views/_defaultTable.html.twig");
    }
}
