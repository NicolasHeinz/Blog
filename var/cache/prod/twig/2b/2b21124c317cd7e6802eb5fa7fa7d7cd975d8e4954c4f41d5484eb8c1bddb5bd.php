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

/* KilikTableBundle::_columnFilterNoTable.html.twig */
class __TwigTemplate_e6c9eb938c1789e12edda05990d7264fd465bba8a81576484b1fdacd169f35e9 extends \Twig\Template
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
        echo "<div data-column=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "name", [], "any", false, false, false, 2), "html", null, true);
        echo "\">
    ";
        // line 3
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 3))) {
            // line 4
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "formView", [], "any", false, false, false, 4), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 4), "name", [], "any", false, false, false, 4), [], "any", false, false, false, 4), 'widget', ["attr" => ["class" => "form-control refreshOnKeyup refreshOnChange", "data-column" => twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "name", [], "any", false, false, false, 4), "data-label" => twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "label", [], "any", false, false, false, 4)]]);
            echo "
    ";
        }
        // line 6
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "KilikTableBundle::_columnFilterNoTable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 6,  44 => 4,  42 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "KilikTableBundle::_columnFilterNoTable.html.twig", "/home/nicolas/Documentos/Blog/vendor/kilik/table/Resources/views/_columnFilterNoTable.html.twig");
    }
}
