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

/* HomeBundle:t:_columnNameNoTable.html.twig */
class __TwigTemplate_08ac3234ae6f593948704535c940978a4340e14fe652b273d6ced47f0fc2948a extends \Twig\Template
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
        $context["label"] = twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "label", [], "any", false, false, false, 2);
        // line 3
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "translateDomain", [], "any", false, false, false, 3))) {
            // line 4
            echo "    ";
            $context["label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "label", [], "any", false, false, false, 4), [], twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "translateDomain", [], "any", false, false, false, 4));
            // line 5
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "capitalize", [], "any", false, false, false, 5)) {
                // line 6
                echo "        ";
                $context["label"] = twig_capitalize_string_filter($this->env, ($context["label"] ?? null));
                // line 7
                echo "    ";
            }
        }
        // line 9
        echo "
";
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "sortable", [], "any", false, false, false, 10)) {
            // line 11
            echo "    <div class=\"columnSortable\" data-column=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "name", [], "any", false, false, false, 11), "html", null, true);
            echo "\" data-sort-column=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "name", [], "any", false, false, false, 11), "html", null, true);
            echo "\" data-label=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "label", [], "any", false, false, false, 11), "html", null, true);
            echo "\" scope=\"col\">
        <a href=\"#\">
            ";
            // line 13
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "
        </a>
        <span class=\"glyphicon columnSortableIcon\"></span>
    </div>
";
        } else {
            // line 18
            echo "    <div data-column=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "name", [], "any", false, false, false, 18), "html", null, true);
            echo "\" data-label=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "label", [], "any", false, false, false, 18), "html", null, true);
            echo "\" scope=\"col\">
        ";
            // line 19
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "
    </div>
";
        }
        // line 22
        echo "
";
    }

    public function getTemplateName()
    {
        return "HomeBundle:t:_columnNameNoTable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 22,  84 => 19,  77 => 18,  69 => 13,  59 => 11,  57 => 10,  54 => 9,  50 => 7,  47 => 6,  44 => 5,  41 => 4,  39 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "HomeBundle:t:_columnNameNoTable.html.twig", "/home/nicolas/Documentos/Blog/src/HomeBundle/Resources/views/t/_columnNameNoTable.html.twig");
    }
}
