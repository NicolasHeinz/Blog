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

/* @KilikTable/_blocks.html.twig */
class __TwigTemplate_6e9664f38738557f9de424aaa27b201b0bf1c977abb82112841e7242507db847 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'tableHeadMassActionsColumn' => [$this, 'block_tableHeadMassActionsColumn'],
            'tableFilterMassActionsColumn' => [$this, 'block_tableFilterMassActionsColumn'],
            'tableBodyMassActionsColumn' => [$this, 'block_tableBodyMassActionsColumn'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('tableHeadMassActionsColumn', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('tableFilterMassActionsColumn', $context, $blocks);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('tableBodyMassActionsColumn', $context, $blocks);
        // line 52
        echo "



";
    }

    // line 1
    public function block_tableHeadMassActionsColumn($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "massActions", [], "any", false, false, false, 2)) {
            // line 3
            echo "        <th class=\"mass-action\">

        </th>
    ";
        }
    }

    // line 9
    public function block_tableFilterMassActionsColumn($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "massActions", [], "any", false, false, false, 10)) {
            // line 11
            echo "        <td class=\"mass-action\" data-label=\"";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kiliktable.mass_select")), "html", null, true);
            echo "\">
            <div class=\"input-group btn-group\">
                <span class=\"input-group-addon\">
                    <input type=\"checkbox\" id=\"kilik_";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "id", [], "any", false, false, false, 14), "html", null, true);
            echo "_mass_check\"/>
                </span>
                <button type=\"button\" class=\"btn dropdown-toggle table-action-hide\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <span class=\"caret\"></span>
                </button>
                <ul class=\"dropdown-menu\">
                    ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "massActions", [], "any", false, false, false, 20));
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
            foreach ($context['_seq'] as $context["_key"] => $context["massAction"]) {
                // line 21
                echo "                        <li>
                            <a href=\"#\" id=\"kilik_";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "id", [], "any", false, false, false, 22), "html", null, true);
                echo "_btn_mass_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["massAction"], "name", [], "any", false, false, false, 22), "html", null, true);
                echo "_selected\"
                               data-mass-action=\"";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["massAction"], "action", [], "any", false, false, false, 23), "html", null, true);
                echo "\"
                               data-name=\"";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["massAction"], "name", [], "any", false, false, false, 24), "html", null, true);
                echo "\"
                               class=\"btn-border-success checkbox-action\"
                            >
                                <b class=\"success\"><i class=\"";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["massAction"], "class", [], "any", false, false, false, 27), "html", null, true);
                echo "\"></i> ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["massAction"], "label", [], "any", false, false, false, 27)), "html", null, true);
                echo "</b>
                            </a>
                        </li>
                        ";
                // line 30
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 30) == false)) {
                    // line 31
                    echo "                            <li role=\"separator\" class=\"divider\"></li>
                        ";
                }
                // line 33
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['massAction'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                </ul>
            </div>
        </td>
    ";
        }
    }

    // line 40
    public function block_tableBodyMassActionsColumn($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "massActions", [], "any", false, false, false, 41)) {
            // line 42
            echo "        <td class=\"mass-action\" data-label=\"";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kiliktable.select")), "html", null, true);
            echo "\">
            <div class=\"input-group\">
                <span class=\"input-group-addon\">
                    <input type=\"checkbox\" id=\"checkbox-";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "object", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45), "html", null, true);
            echo "\" name=\"kilik_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "id", [], "any", false, false, false, 45), "html", null, true);
            echo "_selected[]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "object", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45), "html", null, true);
            echo "\"/>
                    <label for=\"checkbox-";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "object", [], "any", false, false, false, 46), "id", [], "any", false, false, false, 46), "html", null, true);
            echo "\"></label>
                </span>
            </div>
        </td>
    ";
        }
    }

    public function getTemplateName()
    {
        return "@KilikTable/_blocks.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  192 => 46,  184 => 45,  177 => 42,  174 => 41,  170 => 40,  162 => 34,  148 => 33,  144 => 31,  142 => 30,  134 => 27,  128 => 24,  124 => 23,  118 => 22,  115 => 21,  98 => 20,  89 => 14,  82 => 11,  79 => 10,  75 => 9,  67 => 3,  64 => 2,  60 => 1,  52 => 52,  50 => 40,  47 => 39,  45 => 9,  42 => 8,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@KilikTable/_blocks.html.twig", "/home/nicolas/Documentos/Blog/vendor/kilik/table/Resources/views/_blocks.html.twig");
    }
}
