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

/* KilikTableBundle::_formLeftNoTable.html.twig */
class __TwigTemplate_9371bd6b123a0bcd0610018b9b50f6348305c7efd1435ac32c643c09d1e36e7f extends \Twig\Template
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
            'tableTitle' => [$this, 'block_tableTitle'],
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
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "formView", [], "any", false, false, false, 3), 'form_start');
        echo "
";
        // line 4
        $this->displayBlock('tableBeforePanel', $context, $blocks);
        // line 6
        echo "<div class=\"row\">
    <div class=\"col-xs-12 col-sm-4\" id=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "id", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
        ";
        // line 8
        $this->displayBlock('tableHead', $context, $blocks);
        // line 14
        echo "    </div>
    <div class=\"col-xs-12 col-sm-8\">
        ";
        // line 16
        $this->displayBlock('tableTitle', $context, $blocks);
        // line 19
        echo "
        <div id=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "bodyId", [], "any", false, false, false, 20), "html", null, true);
        echo "\">
            ";
        // line 21
        $this->displayBlock('tableBody', $context, $blocks);
        // line 37
        echo "        </div>

        ";
        // line 39
        $this->displayBlock('tableStats', $context, $blocks);
        // line 46
        echo "
        ";
        // line 47
        $this->displayBlock('tablePagination', $context, $blocks);
        // line 54
        echo "    </div>
</div>

";
        // line 57
        $this->displayBlock('tableAfterPanel', $context, $blocks);
        // line 59
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "formView", [], "any", false, false, false, 59), 'form_end');
        echo "
";
    }

    // line 4
    public function block_tableBeforePanel($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 8
    public function block_tableHead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "columns", [], "any", false, false, false, 9));
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
            // line 10
            echo "                ";
            $this->loadTemplate("@KilikTable/_columnNameNoTable.html.twig", "KilikTableBundle::_formLeftNoTable.html.twig", 10)->display($context);
            // line 11
            echo "                ";
            $this->loadTemplate("@KilikTable/_columnFilterNoTable.html.twig", "KilikTableBundle::_formLeftNoTable.html.twig", 11)->display($context);
            // line 12
            echo "            ";
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
        // line 13
        echo "        ";
    }

    // line 16
    public function block_tableTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "            Default title
        ";
    }

    // line 21
    public function block_tableBody($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "                ";
        // line 23
        echo "                ";
        if ((isset($context["tableRenderBody"]) || array_key_exists("tableRenderBody", $context))) {
            // line 24
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
                // line 25
                echo "                        <div class=\"row\">
                            ";
                // line 26
                $this->displayBlock('tableBodyStdColumns', $context, $blocks);
                // line 33
                echo "                        </div>
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
            // line 35
            echo "                ";
        }
        // line 36
        echo "            ";
    }

    // line 26
    public function block_tableBodyStdColumns($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "columns", [], "any", false, false, false, 27));
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
            // line 28
            echo "                                    <div class=\"col-xs-6 col-sm-3\">
                                        ";
            // line 29
            $this->loadTemplate("@KilikTable/_columnCellNoTable.html.twig", "KilikTableBundle::_formLeftNoTable.html.twig", 29)->display($context);
            // line 30
            echo "                                    </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                            ";
    }

    // line 39
    public function block_tableStats($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "            <div id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "id", [], "any", false, false, false, 40), "html", null, true);
        echo "_stats\">
                ";
        // line 41
        $this->displayBlock('tableStatsAjax', $context, $blocks);
        // line 44
        echo "            </div>
        ";
    }

    // line 41
    public function block_tableStatsAjax($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "                    ";
        $this->loadTemplate("@KilikTable/_stats.html.twig", "KilikTableBundle::_formLeftNoTable.html.twig", 42)->display($context);
        // line 43
        echo "                ";
    }

    // line 47
    public function block_tablePagination($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "            <div id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "id", [], "any", false, false, false, 48), "html", null, true);
        echo "_pagination\" class=\"btn-group\">
                ";
        // line 49
        $this->displayBlock('tablePaginationAjax', $context, $blocks);
        // line 52
        echo "            </div>
        ";
    }

    // line 49
    public function block_tablePaginationAjax($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "                    ";
        $this->loadTemplate("@KilikTable/_paginationNumbersIcons.html.twig", "KilikTableBundle::_formLeftNoTable.html.twig", 50)->display($context);
        // line 51
        echo "                ";
    }

    // line 57
    public function block_tableAfterPanel($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "KilikTableBundle::_formLeftNoTable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 57,  312 => 51,  309 => 50,  305 => 49,  300 => 52,  298 => 49,  293 => 48,  289 => 47,  285 => 43,  282 => 42,  278 => 41,  273 => 44,  271 => 41,  266 => 40,  262 => 39,  258 => 32,  243 => 30,  241 => 29,  238 => 28,  220 => 27,  216 => 26,  212 => 36,  209 => 35,  194 => 33,  192 => 26,  189 => 25,  171 => 24,  168 => 23,  166 => 22,  162 => 21,  157 => 17,  153 => 16,  149 => 13,  135 => 12,  132 => 11,  129 => 10,  111 => 9,  107 => 8,  101 => 4,  95 => 59,  93 => 57,  88 => 54,  86 => 47,  83 => 46,  81 => 39,  77 => 37,  75 => 21,  71 => 20,  68 => 19,  66 => 16,  62 => 14,  60 => 8,  56 => 7,  53 => 6,  51 => 4,  47 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "KilikTableBundle::_formLeftNoTable.html.twig", "/home/nicolas/Documentos/Blog/vendor/kilik/table/Resources/views/_formLeftNoTable.html.twig");
    }
}
