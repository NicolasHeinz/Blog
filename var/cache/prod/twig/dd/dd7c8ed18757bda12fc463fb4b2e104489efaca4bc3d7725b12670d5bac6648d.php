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

/* HomeBundle:table:_setup.html.twig */
class __TwigTemplate_14965ca5fa81884ed4c4129fa86dccf56c4c9a0a0977723e93adf07c7667e8cc extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"btn-group\" role=\"group\">
    <button type=\"button\" class=\"btn btn-default dropdown-toggle\" id=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "id", [], "any", false, false, false, 2), "html", null, true);
        echo "_setup\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        <span class=\"glyphicon glyphicon-cog\"></span>
        <span class=\"caret\"></span>
    </button>

    <ul class=\"dropdown-menu pull-right\" aria-labelledby=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "id", [], "any", false, false, false, 7), "html", null, true);
        echo "_setup\">
        <li class=\"dropdown-header\">
            Mostrar Columnas
        </li>

        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "columns", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 13
            echo "            ";
            $context["label"] = twig_get_attribute($this->env, $this->source, $context["column"], "label", [], "any", false, false, false, 13);
            // line 14
            echo "            ";
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["column"], "translateDomain", [], "any", false, false, false, 14))) {
                // line 15
                echo "                ";
                $context["label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["column"], "label", [], "any", false, false, false, 15), [], twig_get_attribute($this->env, $this->source, $context["column"], "translateDomain", [], "any", false, false, false, 15));
                // line 16
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["column"], "capitalize", [], "any", false, false, false, 16)) {
                    // line 17
                    echo "                    ";
                    $context["label"] = twig_capitalize_string_filter($this->env, ($context["label"] ?? null));
                    // line 18
                    echo "                ";
                }
                // line 19
                echo "            ";
            }
            // line 20
            echo "
            <li>
                <a>
                    <input type=\"checkbox\" data-column=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "name", [], "any", false, false, false, 23), "html", null, true);
            echo "\" data-setup=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "id", [], "any", false, false, false, 23), "html", null, true);
            echo "\" class=\"input\"> ";
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "
                </a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "HomeBundle:table:_setup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 27,  86 => 23,  81 => 20,  78 => 19,  75 => 18,  72 => 17,  69 => 16,  66 => 15,  63 => 14,  60 => 13,  56 => 12,  48 => 7,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "HomeBundle:table:_setup.html.twig", "/home/nicolas/Documentos/Blog/src/HomeBundle/Resources/views/table/_setup.html.twig");
    }
}
