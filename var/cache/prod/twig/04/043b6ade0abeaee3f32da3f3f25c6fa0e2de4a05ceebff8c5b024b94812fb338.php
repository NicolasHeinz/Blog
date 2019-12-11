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

/* HomeBundle:table:_defaultTableAlt.html.twig */
class __TwigTemplate_5526df0731b078dc6f56ec7821d558da73f5a9ade1018ab540ead37a20174404 extends \Twig\Template
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
            'exportButton' => [$this, 'block_exportButton'],
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
        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "formView", [], "any", false, false, false, 1), 'form_start');
        echo "

    ";
        // line 4
        echo "    ";
        $this->displayBlock('tableBeforePanel', $context, $blocks);
        // line 5
        echo "
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                ";
        // line 8
        $this->loadTemplate("@Home/table/_rowsPerPage.html.twig", "HomeBundle:table:_defaultTableAlt.html.twig", 8)->display($context);
        // line 9
        echo "
                <div class=\"btn-group pull-right\" role=\"group\">
                    ";
        // line 11
        $this->displayBlock('exportButton', $context, $blocks);
        // line 12
        echo "                    ";
        $this->loadTemplate("@Home/table/_setup.html.twig", "HomeBundle:table:_defaultTableAlt.html.twig", 12)->display($context);
        // line 13
        echo "                </div>
            </div>

            <div class=\"panel-body table-responsive\">
                <table class=\"table table-bordered table-condensed table-hover\" id=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "id", [], "any", false, false, false, 17), "html", null, true);
        echo "\">

                    <thead>
                        ";
        // line 20
        $this->displayBlock('tableHead', $context, $blocks);
        // line 41
        echo "                    </thead>

                    <tbody id=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "bodyId", [], "any", false, false, false, 43), "html", null, true);
        echo "\">
                        ";
        // line 44
        $this->displayBlock('tableBody', $context, $blocks);
        // line 57
        echo "                    </tbody>

                </table>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-6\">
                ";
        // line 65
        $this->displayBlock('tableStats', $context, $blocks);
        // line 72
        echo "            </div>

            <div class=\"col-md-6\">
                <span class=\"pull-right\">
                    ";
        // line 76
        $this->displayBlock('tablePagination', $context, $blocks);
        // line 83
        echo "                </span>
            </div>
        </div>

    ";
        // line 87
        $this->displayBlock('tableAfterPanel', $context, $blocks);
        echo " ";
        // line 88
        echo "
";
        // line 89
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "formView", [], "any", false, false, false, 89), 'form_end');
    }

    // line 4
    public function block_tableBeforePanel($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 11
    public function block_exportButton($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 20
    public function block_tableHead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "                            <tr class=\"text-nowrap\">
                                ";
        // line 23
        echo "                                ";
        $this->displayBlock('tableHeadStdColumns', $context, $blocks);
        // line 28
        echo "                            </tr>

                            ";
        // line 31
        echo "                            ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "columns", [], "any", false, false, false, 31)) > 0)) {
            // line 32
            echo "                                <tr class=\"text-nowrap\">
                                    ";
            // line 33
            $this->displayBlock('tableHeadStdFilters', $context, $blocks);
            // line 38
            echo "                                </tr>
                            ";
        }
        // line 40
        echo "                        ";
    }

    // line 23
    public function block_tableHeadStdColumns($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "columns", [], "any", false, false, false, 24));
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
            // line 25
            echo "                                        ";
            $this->loadTemplate("@Home/table/_columnName.html.twig", "HomeBundle:table:_defaultTableAlt.html.twig", 25)->display($context);
            // line 26
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
        // line 27
        echo "                                ";
    }

    // line 33
    public function block_tableHeadStdFilters($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "                                        ";
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
            echo "                                            ";
            $this->loadTemplate("@Home/table/_columnFilter.html.twig", "HomeBundle:table:_defaultTableAlt.html.twig", 35)->display($context);
            // line 36
            echo "                                        ";
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
        echo "                                    ";
    }

    // line 44
    public function block_tableBody($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "                            ";
        if ((isset($context["tableRenderBody"]) || array_key_exists("tableRenderBody", $context))) {
            // line 46
            echo "                                ";
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
                // line 47
                echo "                                    <tr class=\"text-nowrap\">
                                        ";
                // line 48
                $this->displayBlock('tableBodyStdColumns', $context, $blocks);
                // line 53
                echo "                                    </tr>
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
            // line 55
            echo "                            ";
        }
        // line 56
        echo "                        ";
    }

    // line 48
    public function block_tableBodyStdColumns($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "                                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "columns", [], "any", false, false, false, 49));
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
            // line 50
            echo "                                                ";
            $this->loadTemplate("@Home/table/_columnCell.html.twig", "HomeBundle:table:_defaultTableAlt.html.twig", 50)->display($context);
            // line 51
            echo "                                            ";
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
        // line 52
        echo "                                        ";
    }

    // line 65
    public function block_tableStats($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 66
        echo "                    <div id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "id", [], "any", false, false, false, 66), "html", null, true);
        echo "_stats\">
                        ";
        // line 67
        $this->displayBlock('tableStatsAjax', $context, $blocks);
        // line 70
        echo "                    </div>
                ";
    }

    // line 67
    public function block_tableStatsAjax($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        echo "                            ";
        $this->loadTemplate("@Home/table/_stats.html.twig", "HomeBundle:table:_defaultTableAlt.html.twig", 68)->display($context);
        // line 69
        echo "                        ";
    }

    // line 76
    public function block_tablePagination($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 77
        echo "                        <div id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "id", [], "any", false, false, false, 77), "html", null, true);
        echo "_pagination\" class=\"btn-group\">
                            ";
        // line 78
        $this->displayBlock('tablePaginationAjax', $context, $blocks);
        // line 81
        echo "                        </div>
                    ";
    }

    // line 78
    public function block_tablePaginationAjax($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 79
        echo "                                ";
        $this->loadTemplate("@Home/table/_paginationNumbers.html.twig", "HomeBundle:table:_defaultTableAlt.html.twig", 79)->display($context);
        // line 80
        echo "                            ";
    }

    // line 87
    public function block_tableAfterPanel($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "HomeBundle:table:_defaultTableAlt.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  410 => 87,  406 => 80,  403 => 79,  399 => 78,  394 => 81,  392 => 78,  387 => 77,  383 => 76,  379 => 69,  376 => 68,  372 => 67,  367 => 70,  365 => 67,  360 => 66,  356 => 65,  352 => 52,  338 => 51,  335 => 50,  317 => 49,  313 => 48,  309 => 56,  306 => 55,  291 => 53,  289 => 48,  286 => 47,  268 => 46,  265 => 45,  261 => 44,  257 => 37,  243 => 36,  240 => 35,  222 => 34,  218 => 33,  214 => 27,  200 => 26,  197 => 25,  179 => 24,  175 => 23,  171 => 40,  167 => 38,  165 => 33,  162 => 32,  159 => 31,  155 => 28,  152 => 23,  149 => 21,  145 => 20,  139 => 11,  133 => 4,  129 => 89,  126 => 88,  123 => 87,  117 => 83,  115 => 76,  109 => 72,  107 => 65,  97 => 57,  95 => 44,  91 => 43,  87 => 41,  85 => 20,  79 => 17,  73 => 13,  70 => 12,  68 => 11,  64 => 9,  62 => 8,  57 => 5,  54 => 4,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "HomeBundle:table:_defaultTableAlt.html.twig", "/home/nicolas/Documentos/Blog/src/HomeBundle/Resources/views/table/_defaultTableAlt.html.twig");
    }
}
