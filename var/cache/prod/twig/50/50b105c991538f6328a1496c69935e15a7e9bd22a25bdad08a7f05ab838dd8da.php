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

/* KilikTableBundle::_defaultTableSimple.html.twig */
class __TwigTemplate_35ac3afc78ccc90a18d2a294f840fa3d35a558c739752b4af9920ef494aced03 extends \Twig\Template
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
            'panelHeading' => [$this, 'block_panelHeading'],
            'panelHeadingTools' => [$this, 'block_panelHeadingTools'],
            'panelHeadingToolsInner' => [$this, 'block_panelHeadingToolsInner'],
            'tableTitle' => [$this, 'block_tableTitle'],
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "formView", [], "any", false, false, false, 2), 'form_start');
        echo "
";
        // line 3
        $this->displayBlock('tableBeforePanel', $context, $blocks);
        // line 5
        echo "<div class=\"hpanel hblue\">
    ";
        // line 6
        $this->displayBlock('panelHeading', $context, $blocks);
        // line 21
        echo "    <div class=\"panel-body table-responsive\">
        <table class=\"table table-hover table-condensed table-striped\" id=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "id", [], "any", false, false, false, 22), "html", null, true);
        echo "\">
            <thead>
            ";
        // line 24
        $this->displayBlock('tableHead', $context, $blocks);
        // line 44
        echo "            </thead>
            <tbody id=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "bodyId", [], "any", false, false, false, 45), "html", null, true);
        echo "\">
            ";
        // line 46
        $this->displayBlock('tableBody', $context, $blocks);
        // line 59
        echo "            </tbody>
        </table>


        <div class=\"col-md-6\">
            ";
        // line 64
        $this->displayBlock('tableStats', $context, $blocks);
        // line 71
        echo "        </div>
        <div class=\"col-md-6\">
    <span class=\"pull-right\">
        ";
        // line 74
        $this->displayBlock('tablePagination', $context, $blocks);
        // line 81
        echo "    </span>
        </div>
    </div>
</div>
";
        // line 85
        $this->displayBlock('tableAfterPanel', $context, $blocks);
        // line 87
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "formView", [], "any", false, false, false, 87), 'form_end');
        echo "
";
    }

    // line 3
    public function block_tableBeforePanel($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 6
    public function block_panelHeading($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "        <div class=\"panel-heading hbuilt\">
            ";
        // line 8
        $this->displayBlock('panelHeadingTools', $context, $blocks);
        // line 14
        echo "            ";
        $this->displayBlock('tableTitle', $context, $blocks);
        // line 17
        echo "            ";
        $this->loadTemplate("KilikTableBundle::_setup.html.twig", "KilikTableBundle::_defaultTableSimple.html.twig", 17)->display($context);
        // line 18
        echo "            ";
        $this->loadTemplate("KilikTableBundle::_rowsPerPage.html.twig", "KilikTableBundle::_defaultTableSimple.html.twig", 18)->display($context);
        // line 19
        echo "        </div>
    ";
    }

    // line 8
    public function block_panelHeadingTools($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "                <div class=\"panel-tools\">
                    ";
        // line 10
        $this->displayBlock('panelHeadingToolsInner', $context, $blocks);
        // line 12
        echo "                </div>
            ";
    }

    // line 10
    public function block_panelHeadingToolsInner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "                    ";
    }

    // line 14
    public function block_tableTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "                Default title
            ";
    }

    // line 24
    public function block_tableHead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "                <tr>
                    ";
        // line 27
        echo "                    ";
        $this->displayBlock('tableHeadStdColumns', $context, $blocks);
        // line 32
        echo "                </tr>
                ";
        // line 34
        echo "                ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "columns", [], "any", false, false, false, 34)) > 0)) {
            // line 35
            echo "                    <tr>
                        ";
            // line 36
            $this->displayBlock('tableHeadStdFilters', $context, $blocks);
            // line 41
            echo "                    </tr>
                ";
        }
        // line 43
        echo "            ";
    }

    // line 27
    public function block_tableHeadStdColumns($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "columns", [], "any", false, false, false, 28));
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
            // line 29
            echo "                            ";
            $this->loadTemplate("KilikTableBundle::_columnName.html.twig", "KilikTableBundle::_defaultTableSimple.html.twig", 29)->display($context);
            // line 30
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
        // line 31
        echo "                    ";
    }

    // line 36
    public function block_tableHeadStdFilters($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "columns", [], "any", false, false, false, 37));
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
            // line 38
            echo "                                ";
            $this->loadTemplate("KilikTableBundle::_columnFilter.html.twig", "KilikTableBundle::_defaultTableSimple.html.twig", 38)->display($context);
            // line 39
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
        // line 40
        echo "                        ";
    }

    // line 46
    public function block_tableBody($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "                ";
        if ((isset($context["tableRenderBody"]) || array_key_exists("tableRenderBody", $context))) {
            // line 48
            echo "                    ";
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
                // line 49
                echo "                        <tr>
                            ";
                // line 50
                $this->displayBlock('tableBodyStdColumns', $context, $blocks);
                // line 55
                echo "                        </tr>
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
            // line 57
            echo "                ";
        }
        // line 58
        echo "            ";
    }

    // line 50
    public function block_tableBodyStdColumns($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "columns", [], "any", false, false, false, 51));
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
            // line 52
            echo "                                    ";
            $this->loadTemplate("KilikTableBundle::_columnCell.html.twig", "KilikTableBundle::_defaultTableSimple.html.twig", 52)->display($context);
            // line 53
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
        // line 54
        echo "                            ";
    }

    // line 64
    public function block_tableStats($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 65
        echo "                <div id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "id", [], "any", false, false, false, 65), "html", null, true);
        echo "_stats\">
                    ";
        // line 66
        $this->displayBlock('tableStatsAjax', $context, $blocks);
        // line 69
        echo "                </div>
            ";
    }

    // line 66
    public function block_tableStatsAjax($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "                        ";
        $this->loadTemplate("KilikTableBundle::_stats.html.twig", "KilikTableBundle::_defaultTableSimple.html.twig", 67)->display($context);
        // line 68
        echo "                    ";
    }

    // line 74
    public function block_tablePagination($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 75
        echo "            <div id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "id", [], "any", false, false, false, 75), "html", null, true);
        echo "_pagination\" class=\"btn-group\">
                ";
        // line 76
        $this->displayBlock('tablePaginationAjax', $context, $blocks);
        // line 79
        echo "            </div>
        ";
    }

    // line 76
    public function block_tablePaginationAjax($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 77
        echo "                    ";
        $this->loadTemplate("KilikTableBundle::_paginationNumbers.html.twig", "KilikTableBundle::_defaultTableSimple.html.twig", 77)->display($context);
        // line 78
        echo "                ";
    }

    // line 85
    public function block_tableAfterPanel($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "KilikTableBundle::_defaultTableSimple.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  436 => 85,  432 => 78,  429 => 77,  425 => 76,  420 => 79,  418 => 76,  413 => 75,  409 => 74,  405 => 68,  402 => 67,  398 => 66,  393 => 69,  391 => 66,  386 => 65,  382 => 64,  378 => 54,  364 => 53,  361 => 52,  343 => 51,  339 => 50,  335 => 58,  332 => 57,  317 => 55,  315 => 50,  312 => 49,  294 => 48,  291 => 47,  287 => 46,  283 => 40,  269 => 39,  266 => 38,  248 => 37,  244 => 36,  240 => 31,  226 => 30,  223 => 29,  205 => 28,  201 => 27,  197 => 43,  193 => 41,  191 => 36,  188 => 35,  185 => 34,  182 => 32,  179 => 27,  176 => 25,  172 => 24,  167 => 15,  163 => 14,  159 => 11,  155 => 10,  150 => 12,  148 => 10,  145 => 9,  141 => 8,  136 => 19,  133 => 18,  130 => 17,  127 => 14,  125 => 8,  122 => 7,  118 => 6,  112 => 3,  106 => 87,  104 => 85,  98 => 81,  96 => 74,  91 => 71,  89 => 64,  82 => 59,  80 => 46,  76 => 45,  73 => 44,  71 => 24,  66 => 22,  63 => 21,  61 => 6,  58 => 5,  56 => 3,  52 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "KilikTableBundle::_defaultTableSimple.html.twig", "/home/nicolas/Documentos/Blog/vendor/kilik/table/Resources/views/_defaultTableSimple.html.twig");
    }
}
