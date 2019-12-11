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

/* HomeBundle:Perfil:perfil.html.twig */
class __TwigTemplate_e7d1df24e396ebf60e73049847bd98e084ccd0dbf57c52c5d45991f46f22feb7 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "HomeBundle:Perfil:perfil.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"col-md-4 offset-md-4 mt-5 card\">
        <div class=\"col-md-12 mt-4\">
            <form action=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
        echo "\" method=\"post\">

                <h1 class=\"text-center\"><span class=\"badge badge-primary\">Perfil</span></h1>
                <input type=\"hidden\" name=\"id\" id=\"id\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 9), "html", null, true);
        echo "\">

                ";
        // line 11
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 11), "get", [0 => "rol"], "method", false, false, false, 11) == twig_constant("LoginBundle\\Repository\\usersRepository::USER_ADMIN"))) {
            // line 12
            echo "
                <div class=\"form-group\">
                    <select class=\"form-control\" id=\"select_rol\" name=\"_select_rol\">
                        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["roles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 16
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "rol", [], "any", false, false, false, 16) == $context["r"])) {
                    // line 17
                    echo "                                <option selected>";
                    echo twig_escape_filter($this->env, $context["r"], "html", null, true);
                    echo "</option>
                            ";
                } else {
                    // line 19
                    echo "                                <option>";
                    echo twig_escape_filter($this->env, $context["r"], "html", null, true);
                    echo "</option>
                            ";
                }
                // line 21
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "                    </select>
                </div>

                <div class=\"form-group\">
                    <select class=\"form-control\" id=\"select_active\" name=\"_select_active\">
                        ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["status"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 28
                echo "                            ";
                if (((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "active", [], "any", false, false, false, 28) == 1) && ($context["a"] == twig_constant("LoginBundle\\Repository\\usersRepository::USER_ALTA")))) {
                    // line 29
                    echo "                                <option selected>";
                    echo twig_escape_filter($this->env, $context["a"], "html", null, true);
                    echo "</option>
                            ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 30
($context["user"] ?? null), "active", [], "any", false, false, false, 30) == 0) && ($context["a"] == twig_constant("LoginBundle\\Repository\\usersRepository::USER_BAJA")))) {
                    // line 31
                    echo "                                <option selected>";
                    echo twig_escape_filter($this->env, $context["a"], "html", null, true);
                    echo "</option>
                            ";
                } else {
                    // line 33
                    echo "                                <option> ";
                    echo twig_escape_filter($this->env, $context["a"], "html", null, true);
                    echo "</option>
                            ";
                }
                // line 35
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                    </select>
                </div>
                ";
        }
        // line 39
        echo "

                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 41), 'label');
        echo "
                ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 42), 'widget', ["value" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 42)]);
        echo "

                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "surname", [], "any", false, false, false, 44), 'label');
        echo "
                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "surname", [], "any", false, false, false, 45), 'widget', ["value" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "surname", [], "any", false, false, false, 45)]);
        echo "

                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 47), 'label');
        echo "
                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 48), 'widget', ["value" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 48)]);
        echo "

                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 50), 'label');
        echo "
                ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 51), 'widget', ["value" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "password", [], "any", false, false, false, 51)]);
        echo "

                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "username", [], "any", false, false, false, 53), 'label');
        echo "
                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "username", [], "any", false, false, false, 54), 'widget', ["value" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 54)]);
        echo "

                <div class=\"col-md-12 text-center mt-3 mb-3\">
                    <button type=\"submit\" class=\"btn btn-primary\">Guardar</button>
                </div>
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "HomeBundle:Perfil:perfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 54,  181 => 53,  176 => 51,  172 => 50,  167 => 48,  163 => 47,  158 => 45,  154 => 44,  149 => 42,  145 => 41,  141 => 39,  136 => 36,  130 => 35,  124 => 33,  118 => 31,  116 => 30,  111 => 29,  108 => 28,  104 => 27,  97 => 22,  91 => 21,  85 => 19,  79 => 17,  76 => 16,  72 => 15,  67 => 12,  65 => 11,  60 => 9,  54 => 6,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "HomeBundle:Perfil:perfil.html.twig", "/home/nicolas/Documentos/Blog/src/HomeBundle/Resources/views/Perfil/perfil.html.twig");
    }
}
