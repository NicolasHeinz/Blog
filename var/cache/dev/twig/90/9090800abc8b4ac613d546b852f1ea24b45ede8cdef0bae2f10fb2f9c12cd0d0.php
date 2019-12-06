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

/* @KilikTable/_blocks.html.twig */
class __TwigTemplate_21e4b1c82ca9fc0a6133709e39aaf54db78fa1b96bde9abe5816c336998d49e6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'tableHeadMassActionsColumn' => [$this, 'block_tableHeadMassActionsColumn'],
            'tableFilterMassActionsColumn' => [$this, 'block_tableFilterMassActionsColumn'],
            'tableBodyMassActionsColumn' => [$this, 'block_tableBodyMassActionsColumn'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KilikTable/_blocks.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableHeadMassActionsColumn"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableHeadMassActionsColumn"));

        // line 2
        echo "    ";
        if ($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "massActions", [])) {
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableFilterMassActionsColumn"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableFilterMassActionsColumn"));

        // line 10
        echo "    ";
        if ($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "massActions", [])) {
            // line 11
            echo "        <td class=\"mass-action\" data-label=\"";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("kiliktable.mass_select")), "html", null, true);
            echo "\">
            <div class=\"input-group btn-group\">
                <span class=\"input-group-addon\">
                    <input type=\"checkbox\" id=\"kilik_";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "id", []), "html", null, true);
            echo "_mass_check\"/>
                </span>
                <button type=\"button\" class=\"btn dropdown-toggle table-action-hide\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <span class=\"caret\"></span>
                </button>
                <ul class=\"dropdown-menu\">
                    ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "massActions", []));
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
                echo twig_escape_filter($this->env, $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "id", []), "html", null, true);
                echo "_btn_mass_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["massAction"], "name", []), "html", null, true);
                echo "_selected\"
                               data-mass-action=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["massAction"], "action", []), "html", null, true);
                echo "\"
                               data-name=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["massAction"], "name", []), "html", null, true);
                echo "\"
                               class=\"btn-border-success checkbox-action\"
                            >
                                <b class=\"success\"><i class=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["massAction"], "class", []), "html", null, true);
                echo "\"></i> ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["massAction"], "label", [])), "html", null, true);
                echo "</b>
                            </a>
                        </li>
                        ";
                // line 30
                if (($this->getAttribute($context["loop"], "last", []) == false)) {
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableBodyMassActionsColumn"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableBodyMassActionsColumn"));

        // line 41
        echo "    ";
        if ($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "massActions", [])) {
            // line 42
            echo "        <td class=\"mass-action\" data-label=\"";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("kiliktable.select")), "html", null, true);
            echo "\">
            <div class=\"input-group\">
                <span class=\"input-group-addon\">
                    <input type=\"checkbox\" id=\"checkbox-";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "object", []), "id", []), "html", null, true);
            echo "\" name=\"kilik_";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "id", []), "html", null, true);
            echo "_selected[]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "object", []), "id", []), "html", null, true);
            echo "\"/>
                    <label for=\"checkbox-";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "object", []), "id", []), "html", null, true);
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
        return array (  224 => 46,  216 => 45,  209 => 42,  206 => 41,  197 => 40,  183 => 34,  169 => 33,  165 => 31,  163 => 30,  155 => 27,  149 => 24,  145 => 23,  139 => 22,  136 => 21,  119 => 20,  110 => 14,  103 => 11,  100 => 10,  91 => 9,  77 => 3,  74 => 2,  65 => 1,  51 => 52,  49 => 40,  46 => 39,  44 => 9,  41 => 8,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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




", "@KilikTable/_blocks.html.twig", "/home/nicolas/blog/vendor/kilik/table/Resources/views/_blocks.html.twig");
    }
}
