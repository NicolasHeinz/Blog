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

/* @KilikTable/_setup.html.twig */
class __TwigTemplate_e890c6eb08194b574064e4ce1c33b4d61353f1f2ac4268ad1ca8e9607ec3cfbe extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KilikTable/_setup.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KilikTable/_setup.html.twig"));

        // line 2
        echo "
<span class=\"dropdown\">
    <button class=\"btn btn-normal dropdown-toggle\" id=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "id", []), "html", null, true);
        echo "_setup\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\"><span class=\"glyphicon glyphicon-cog\"></span> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("kiliktable.setup"), "html", null, true);
        echo "</button>
    <ul class=\"dropdown-menu\" aria-labelledby=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "id", []), "html", null, true);
        echo "_setup\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "columns", []));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 7
            echo "            ";
            $context["label"] = $this->getAttribute($context["column"], "label", []);
            // line 8
            echo "            ";
            if ( !(null === $this->getAttribute($context["column"], "translateDomain", []))) {
                // line 9
                echo "                ";
                $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["column"], "label", []), [], $this->getAttribute($context["column"], "translateDomain", []));
                // line 10
                echo "                ";
                if ($this->getAttribute($context["column"], "capitalize", [])) {
                    // line 11
                    echo "                    ";
                    $context["label"] = twig_capitalize_string_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")));
                    // line 12
                    echo "                ";
                }
                // line 13
                echo "            ";
            }
            // line 14
            echo "
            <li>
                <a>
                    <input type=\"checkbox\" data-column=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["column"], "name", []), "html", null, true);
            echo "\" data-setup=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "id", []), "html", null, true);
            echo "\" class=\"input\"></input> ";
            echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
            echo "
                </a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </ul>
</span>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KilikTable/_setup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 21,  80 => 17,  75 => 14,  72 => 13,  69 => 12,  66 => 11,  63 => 10,  60 => 9,  57 => 8,  54 => 7,  50 => 6,  46 => 5,  40 => 4,  36 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# @KilikTable/_setup.html.twig #}

<span class=\"dropdown\">
    <button class=\"btn btn-normal dropdown-toggle\" id=\"{{ table.id }}_setup\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\"><span class=\"glyphicon glyphicon-cog\"></span> {{ \"kiliktable.setup\" |trans }}</button>
    <ul class=\"dropdown-menu\" aria-labelledby=\"{{ table.id }}_setup\">
        {% for column in table.columns %}
            {% set label = column.label %}
            {% if column.translateDomain is not null %}
                {% set label = (column.label | trans({}, column.translateDomain)) %}
                {% if column.capitalize %}
                    {% set label = label | capitalize %}
                {% endif %}
            {% endif %}

            <li>
                <a>
                    <input type=\"checkbox\" data-column=\"{{ column.name }}\" data-setup=\"{{ table.id }}\" class=\"input\"></input> {{ label }}
                </a>
            </li>
        {% endfor %}
    </ul>
</span>
", "@KilikTable/_setup.html.twig", "/home/nicolas/blog/vendor/kilik/table/Resources/views/_setup.html.twig");
    }
}
