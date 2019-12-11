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
class __TwigTemplate_e1492c6b20ae7f305530c9d12cb74ad490cfee607394e17a88ea6b05e318f69a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KilikTable/_blocks.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KilikTable/_blocks.html.twig"));

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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_tableHeadMassActionsColumn($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableHeadMassActionsColumn"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableHeadMassActionsColumn"));

        // line 2
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 2, $this->source); })()), "massActions", [], "any", false, false, false, 2)) {
            // line 3
            echo "        <th class=\"mass-action\">

        </th>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_tableFilterMassActionsColumn($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableFilterMassActionsColumn"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableFilterMassActionsColumn"));

        // line 10
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 10, $this->source); })()), "massActions", [], "any", false, false, false, 10)) {
            // line 11
            echo "        <td class=\"mass-action\" data-label=\"";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kiliktable.mass_select")), "html", null, true);
            echo "\">
            <div class=\"input-group btn-group\">
                <span class=\"input-group-addon\">
                    <input type=\"checkbox\" id=\"kilik_";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14), "html", null, true);
            echo "_mass_check\"/>
                </span>
                <button type=\"button\" class=\"btn dropdown-toggle table-action-hide\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <span class=\"caret\"></span>
                </button>
                <ul class=\"dropdown-menu\">
                    ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 20, $this->source); })()), "massActions", [], "any", false, false, false, 20));
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
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 40
    public function block_tableBodyMassActionsColumn($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableBodyMassActionsColumn"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableBodyMassActionsColumn"));

        // line 41
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 41, $this->source); })()), "massActions", [], "any", false, false, false, 41)) {
            // line 42
            echo "        <td class=\"mass-action\" data-label=\"";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kiliktable.select")), "html", null, true);
            echo "\">
            <div class=\"input-group\">
                <span class=\"input-group-addon\">
                    <input type=\"checkbox\" id=\"checkbox-";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 45, $this->source); })()), "object", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45), "html", null, true);
            echo "\" name=\"kilik_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 45, $this->source); })()), "id", [], "any", false, false, false, 45), "html", null, true);
            echo "_selected[]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 45, $this->source); })()), "object", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45), "html", null, true);
            echo "\"/>
                    <label for=\"checkbox-";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 46, $this->source); })()), "object", [], "any", false, false, false, 46), "id", [], "any", false, false, false, 46), "html", null, true);
            echo "\"></label>
                </span>
            </div>
        </td>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@KilikTable/_blocks.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  234 => 46,  226 => 45,  219 => 42,  216 => 41,  206 => 40,  192 => 34,  178 => 33,  174 => 31,  172 => 30,  164 => 27,  158 => 24,  154 => 23,  148 => 22,  145 => 21,  128 => 20,  119 => 14,  112 => 11,  109 => 10,  99 => 9,  85 => 3,  82 => 2,  72 => 1,  58 => 52,  56 => 40,  53 => 39,  51 => 9,  48 => 8,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block tableHeadMassActionsColumn %}
    {% if table.massActions %}
        <th class=\"mass-action\">

        </th>
    {% endif %}
{% endblock tableHeadMassActionsColumn %}

{% block tableFilterMassActionsColumn %}
    {% if table.massActions %}
        <td class=\"mass-action\" data-label=\"{{ 'kiliktable.mass_select'|trans|capitalize }}\">
            <div class=\"input-group btn-group\">
                <span class=\"input-group-addon\">
                    <input type=\"checkbox\" id=\"kilik_{{ table.id }}_mass_check\"/>
                </span>
                <button type=\"button\" class=\"btn dropdown-toggle table-action-hide\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <span class=\"caret\"></span>
                </button>
                <ul class=\"dropdown-menu\">
                    {% for massAction in table.massActions %}
                        <li>
                            <a href=\"#\" id=\"kilik_{{ table.id }}_btn_mass_{{ massAction.name }}_selected\"
                               data-mass-action=\"{{ massAction.action }}\"
                               data-name=\"{{ massAction.name }}\"
                               class=\"btn-border-success checkbox-action\"
                            >
                                <b class=\"success\"><i class=\"{{ massAction.class }}\"></i> {{ massAction.label|capitalize }}</b>
                            </a>
                        </li>
                        {% if loop.last == false %}
                            <li role=\"separator\" class=\"divider\"></li>
                        {% endif %}
                    {% endfor %}
                </ul>
            </div>
        </td>
    {% endif %}
{% endblock tableFilterMassActionsColumn %}

{% block tableBodyMassActionsColumn %}
    {% if table.massActions %}
        <td class=\"mass-action\" data-label=\"{{ 'kiliktable.select'|trans|capitalize }}\">
            <div class=\"input-group\">
                <span class=\"input-group-addon\">
                    <input type=\"checkbox\" id=\"checkbox-{{ row.object.id }}\" name=\"kilik_{{ table.id }}_selected[]\" value=\"{{ row.object.id }}\"/>
                    <label for=\"checkbox-{{ row.object.id }}\"></label>
                </span>
            </div>
        </td>
    {% endif %}
{% endblock tableBodyMassActionsColumn %}




", "@KilikTable/_blocks.html.twig", "/home/nicolas/Documentos/Blog/vendor/kilik/table/Resources/views/_blocks.html.twig");
    }
}
