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

/* KilikTableBundle::_setup.html.twig */
class __TwigTemplate_a06777fdd95407db4be8557600e57ca7052b4d18066527febf24ad8487005f9b extends \Twig\Template
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
        // line 2
        echo "
<span class=\"dropdown\">
    <button class=\"btn btn-normal dropdown-toggle\" id=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "id", [], "any", false, false, false, 4), "html", null, true);
        echo "_setup\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\"><span class=\"glyphicon glyphicon-cog\"></span> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kiliktable.setup"), "html", null, true);
        echo "</button>
    <ul class=\"dropdown-menu\" aria-labelledby=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "id", [], "any", false, false, false, 5), "html", null, true);
        echo "_setup\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "columns", [], "any", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 7
            echo "            ";
            $context["label"] = twig_get_attribute($this->env, $this->source, $context["column"], "label", [], "any", false, false, false, 7);
            // line 8
            echo "            ";
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["column"], "translateDomain", [], "any", false, false, false, 8))) {
                // line 9
                echo "                ";
                $context["label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["column"], "label", [], "any", false, false, false, 9), [], twig_get_attribute($this->env, $this->source, $context["column"], "translateDomain", [], "any", false, false, false, 9));
                // line 10
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["column"], "capitalize", [], "any", false, false, false, 10)) {
                    // line 11
                    echo "                    ";
                    $context["label"] = twig_capitalize_string_filter($this->env, ($context["label"] ?? null));
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "name", [], "any", false, false, false, 17), "html", null, true);
            echo "\" data-setup=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "id", [], "any", false, false, false, 17), "html", null, true);
            echo "\" class=\"input\"></input> ";
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
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
    }

    public function getTemplateName()
    {
        return "KilikTableBundle::_setup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 21,  81 => 17,  76 => 14,  73 => 13,  70 => 12,  67 => 11,  64 => 10,  61 => 9,  58 => 8,  55 => 7,  51 => 6,  47 => 5,  41 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "KilikTableBundle::_setup.html.twig", "/home/nicolas/Documentos/Blog/vendor/kilik/table/Resources/views/_setup.html.twig");
    }
}
