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

/* @Home/t/_defaultTableAlt.html.twig */
class __TwigTemplate_121a08e85b743e0a015e70fc9a94e64816b07f9d801e52ddc847ab8ef3fcd93a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("@KilikTable/_blocks.html.twig", "@Home/t/_defaultTableAlt.html.twig", 2);
        // line 2
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."@KilikTable/_blocks.html.twig".'" cannot be used as a trait.', 2, $this->getSourceContext());
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["tableHeadMassActionsColumn"])) {
            throw new RuntimeError(sprintf('Block "tableHeadMassActionsColumn" is not defined in trait "@KilikTable/_blocks.html.twig".'), 2, $this->getSourceContext());
        }

        $_trait_0_blocks["parent_tableHeadMassActionsColumn"] = $_trait_0_blocks["tableHeadMassActionsColumn"]; unset($_trait_0_blocks["tableHeadMassActionsColumn"]);

        if (!isset($_trait_0_blocks["tableFilterMassActionsColumn"])) {
            throw new RuntimeError(sprintf('Block "tableFilterMassActionsColumn" is not defined in trait "@KilikTable/_blocks.html.twig".'), 2, $this->getSourceContext());
        }

        $_trait_0_blocks["parent_tableFilterMassActionsColumn"] = $_trait_0_blocks["tableFilterMassActionsColumn"]; unset($_trait_0_blocks["tableFilterMassActionsColumn"]);

        if (!isset($_trait_0_blocks["tableBodyMassActionsColumn"])) {
            throw new RuntimeError(sprintf('Block "tableBodyMassActionsColumn" is not defined in trait "@KilikTable/_blocks.html.twig".'), 2, $this->getSourceContext());
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Home/t/_defaultTableAlt.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Home/t/_defaultTableAlt.html.twig"));

        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "formView", []), 'form_start');
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
        $this->loadTemplate("@KilikTable/_setup.html.twig", "@Home/t/_defaultTableAlt.html.twig", 20)->display($context);
        // line 21
        echo "        ";
        $this->loadTemplate("@KilikTable/_rowsPerPage.html.twig", "@Home/t/_defaultTableAlt.html.twig", 21)->display($context);
        // line 22
        echo "
    </div>
    <div class=\"panel-body table-responsive\">
        <table class=\"table table-hover table-striped table-bordered\" id=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "id", []), "html", null, true);
        echo "\">
            <thead>
                ";
        // line 27
        $this->displayBlock('tableHead', $context, $blocks);
        // line 53
        echo "            </thead>
            <tbody id=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "bodyId", []), "html", null, true);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "formView", []), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_tableBeforePanel($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableBeforePanel"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableBeforePanel"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_tableTitle($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableTitle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableTitle"));

        // line 15
        echo "                Default title
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 27
    public function block_tableHead($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableHead"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableHead"));

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
        if ((twig_length_filter($this->env, $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "columns", [])) > 0)) {
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 30
    public function block_tableHeadMassActionsColumn($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableHeadMassActionsColumn"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableHeadMassActionsColumn"));

        // line 31
        echo "                            ";
        $this->displayBlock("parent_tableHeadMassActionsColumn", $context, $blocks);
        echo "
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 33
    public function block_tableHeadStdColumns($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableHeadStdColumns"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableHeadStdColumns"));

        // line 34
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "columns", []));
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
            $this->loadTemplate("@KilikTable/_columnName.html.twig", "@Home/t/_defaultTableAlt.html.twig", 35)->display($context);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 42
    public function block_tableFilterMassActionsColumn($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableFilterMassActionsColumn"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableFilterMassActionsColumn"));

        // line 43
        echo "                                ";
        $this->displayBlock("parent_tableFilterMassActionsColumn", $context, $blocks);
        echo "
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 45
    public function block_tableHeadStdFilters($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableHeadStdFilters"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableHeadStdFilters"));

        // line 46
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "columns", []));
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
            $this->loadTemplate("@KilikTable/_columnFilter.html.twig", "@Home/t/_defaultTableAlt.html.twig", 47)->display($context);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 55
    public function block_tableBody($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableBody"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableBody"));

        // line 56
        echo "                    ";
        if ((isset($context["tableRenderBody"]) || array_key_exists("tableRenderBody", $context))) {
            // line 57
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? $this->getContext($context, "rows")));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 59
    public function block_tableBodyMassActionsColumn($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableBodyMassActionsColumn"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableBodyMassActionsColumn"));

        // line 60
        echo "                                    ";
        $this->displayBlock("parent_tableBodyMassActionsColumn", $context, $blocks);
        echo "
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 62
    public function block_tableBodyStdColumns($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableBodyStdColumns"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableBodyStdColumns"));

        // line 63
        echo "                                    <td>
                                        <a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", ["id" => $this->getAttribute($this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "object", []), "id", [])]), "html", null, true);
        echo "\">
                                            <i class=\"fa fa-search\">Ver</i>
                                        </a>
                                    </td>
                                    ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "columns", []));
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
            $this->loadTemplate("@KilikTable/_columnCell.html.twig", "@Home/t/_defaultTableAlt.html.twig", 69)->display($context);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 81
    public function block_tableStats($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableStats"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableStats"));

        // line 82
        echo "        <div id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "id", []), "html", null, true);
        echo "_stats\">
            ";
        // line 83
        $this->displayBlock('tableStatsAjax', $context, $blocks);
        // line 86
        echo "        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 83
    public function block_tableStatsAjax($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableStatsAjax"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableStatsAjax"));

        // line 84
        echo "                ";
        $this->loadTemplate("@KilikTable/_stats.html.twig", "@Home/t/_defaultTableAlt.html.twig", 84)->display($context);
        // line 85
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 91
    public function block_tablePagination($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tablePagination"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tablePagination"));

        // line 92
        echo "            <div id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "id", []), "html", null, true);
        echo "_pagination\" class=\"btn-group\">
                ";
        // line 93
        $this->displayBlock('tablePaginationAjax', $context, $blocks);
        // line 96
        echo "            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 93
    public function block_tablePaginationAjax($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tablePaginationAjax"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tablePaginationAjax"));

        // line 94
        echo "                    ";
        $this->loadTemplate("@KilikTable/_paginationNumbers.html.twig", "@Home/t/_defaultTableAlt.html.twig", 94)->display($context);
        // line 95
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 100
    public function block_tableAfterPanel($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableAfterPanel"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableAfterPanel"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Home/t/_defaultTableAlt.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  643 => 100,  633 => 95,  630 => 94,  621 => 93,  610 => 96,  608 => 93,  603 => 92,  594 => 91,  584 => 85,  581 => 84,  572 => 83,  561 => 86,  559 => 83,  554 => 82,  545 => 81,  535 => 71,  521 => 70,  518 => 69,  501 => 68,  494 => 64,  491 => 63,  482 => 62,  469 => 60,  460 => 59,  450 => 75,  447 => 74,  432 => 72,  429 => 62,  427 => 59,  424 => 58,  406 => 57,  403 => 56,  394 => 55,  384 => 49,  370 => 48,  367 => 47,  349 => 46,  340 => 45,  327 => 43,  318 => 42,  308 => 37,  294 => 36,  291 => 35,  273 => 34,  264 => 33,  251 => 31,  242 => 30,  232 => 52,  228 => 50,  225 => 45,  223 => 42,  220 => 41,  217 => 40,  214 => 38,  211 => 33,  208 => 30,  205 => 28,  196 => 27,  185 => 15,  176 => 14,  159 => 9,  147 => 102,  145 => 100,  141 => 98,  139 => 91,  134 => 88,  132 => 81,  125 => 76,  123 => 55,  119 => 54,  116 => 53,  114 => 27,  109 => 25,  104 => 22,  101 => 21,  98 => 20,  94 => 17,  92 => 14,  87 => 11,  85 => 9,  81 => 8,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# @KilikTable/_defaultTableAlt.html.twig #}
{% use \"@KilikTable/_blocks.html.twig\" with
    tableHeadMassActionsColumn as parent_tableHeadMassActionsColumn,
    tableFilterMassActionsColumn as parent_tableFilterMassActionsColumn,
    tableBodyMassActionsColumn as parent_tableBodyMassActionsColumn
%}
{# @param Kilik\\Components\\Table table #}
{{ form_start(table.formView) }}
{% block tableBeforePanel %}
{% endblock tableBeforePanel %}
<div class=\"panel panel-info\">
    <div class=\"panel-heading\">
        <div class=\"panel-title\">
            {% block tableTitle %}
                Default title
            {% endblock tableTitle %}
        </div>

        {# setup of the list: hidden columns, rows per page ... #}
        {% include \"@KilikTable/_setup.html.twig\" %}
        {% include \"@KilikTable/_rowsPerPage.html.twig\" %}

    </div>
    <div class=\"panel-body table-responsive\">
        <table class=\"table table-hover table-striped table-bordered\" id=\"{{ table.id }}\">
            <thead>
                {% block tableHead %}
                    <tr>
                        {# columns names #}
                        {% block tableHeadMassActionsColumn %}
                            {{ block('parent_tableHeadMassActionsColumn') }}
                        {% endblock %}
                        {% block tableHeadStdColumns %}
                            {% for column in table.columns %}
                                {% include \"@KilikTable/_columnName.html.twig\" %}
                            {% endfor %}
                        {% endblock tableHeadStdColumns %}
                    </tr>
                    {# columns filters #}
                    {% if table.columns|length > 0 %}
                        <tr>
                            {% block tableFilterMassActionsColumn %}
                                {{ block('parent_tableFilterMassActionsColumn') }}
                            {% endblock %}
                            {% block tableHeadStdFilters %}
                                {% for column in table.columns %}
                                    {% include \"@KilikTable/_columnFilter.html.twig\" %}
                                {% endfor %}
                            {% endblock tableHeadStdFilters %}
                        </tr>
                    {% endif %}
                {% endblock tableHead %}
            </thead>
            <tbody id=\"{{ table.bodyId }}\">
                {% block tableBody %}
                    {% if tableRenderBody is defined %}
                        {% for row in rows %}
                            <tr>
                                {% block tableBodyMassActionsColumn %}
                                    {{ block('parent_tableBodyMassActionsColumn') }}
                                {% endblock %}
                                {% block tableBodyStdColumns %}
                                    <td>
                                        <a href=\"{{ path('profile',{id:row.object.id}) }}\">
                                            <i class=\"fa fa-search\">Ver</i>
                                        </a>
                                    </td>
                                    {% for column in table.columns %}
                                        {% include \"@KilikTable/_columnCell.html.twig\" %}
                                    {% endfor %}
                                {% endblock tableBodyStdColumns %}
                            </tr>
                        {% endfor %}
                    {% endif %}
                {% endblock tableBody %}
            </tbody>
        </table>
    </div>
</div>
<div class=\"col-md-6\">
    {% block tableStats %}
        <div id=\"{{ table.id }}_stats\">
            {% block tableStatsAjax %}
                {% include \"@KilikTable/_stats.html.twig\" %}
            {% endblock tableStatsAjax %}
        </div>
    {% endblock tableStats %}
</div>
<div class=\"col-md-6\">
    <span class=\"pull-right\">
        {% block tablePagination %}
            <div id=\"{{ table.id }}_pagination\" class=\"btn-group\">
                {% block tablePaginationAjax %}
                    {% include \"@KilikTable/_paginationNumbers.html.twig\" %}
                {% endblock tablePaginationAjax %}
            </div>
        {% endblock tablePagination %}
    </span>
</div>
{% block tableAfterPanel %}
{% endblock tableAfterPanel %}
{{ form_end(table.formView) }}
", "@Home/t/_defaultTableAlt.html.twig", "/home/nicolas/blog/src/HomeBundle/Resources/views/t/_defaultTableAlt.html.twig");
    }
}
