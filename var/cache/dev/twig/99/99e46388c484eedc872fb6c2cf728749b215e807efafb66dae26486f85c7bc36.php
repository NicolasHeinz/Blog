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

/* @Home/Perfil/perfil.html.twig */
class __TwigTemplate_debccf03eb84d55fe11b9beddbf2bd51e7800479fac3274594974be2ac968a7b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Home/Perfil/perfil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Home/Perfil/perfil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Home/Perfil/perfil.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"col-md-4 offset-md-4 mt-5 card\">
        <div class=\"col-md-12 mt-4\">
            <form action=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile");
        echo "\" method=\"post\">

                <h1 class=\"text-center\"><span class=\"badge badge-primary\">Perfil</span></h1>
                <input type=\"hidden\" name=\"id\" id=\"id\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", []), "html", null, true);
        echo "\">

                ";
        // line 11
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "rol"], "method") == twig_constant("LoginBundle\\Repository\\usersRepository::USER_ADMIN"))) {
            // line 12
            echo "
                <div class=\"form-group\">
                    <select class=\"form-control\" id=\"select_rol\" name=\"_select_rol\">
                        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["roles"] ?? $this->getContext($context, "roles")));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 16
                echo "                            ";
                if (($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "rol", []) == $context["r"])) {
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
            $context['_seq'] = twig_ensure_traversable(($context["status"] ?? $this->getContext($context, "status")));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 28
                echo "                            ";
                if ((($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "active", []) == 1) && ($context["a"] == twig_constant("LoginBundle\\Repository\\usersRepository::USER_ALTA")))) {
                    // line 29
                    echo "                                <option selected>";
                    echo twig_escape_filter($this->env, $context["a"], "html", null, true);
                    echo "</option>
                            ";
                } elseif ((($this->getAttribute(                // line 30
($context["user"] ?? $this->getContext($context, "user")), "active", []) == 0) && ($context["a"] == twig_constant("LoginBundle\\Repository\\usersRepository::USER_BAJA")))) {
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", []), 'label');
        echo "
                ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", []), 'widget', ["value" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "name", [])]);
        echo "

                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "surname", []), 'label');
        echo "
                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "surname", []), 'widget', ["value" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "surname", [])]);
        echo "

                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'label');
        echo "
                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'widget', ["value" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", [])]);
        echo "

                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", []), 'label');
        echo "
                ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", []), 'widget', ["value" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "password", [])]);
        echo "

                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", []), 'label');
        echo "
                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", []), 'widget', ["value" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", [])]);
        echo "
                <!--<div class=\"form-group\">
                    <label for=\"nombre\">Nombre</label>
                    <input type=\"text\" class=\"form-control\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "name", []), "html", null, true);
        echo "\" name=\"_nombre\">
                </div>

                <div class=\"form-group\">
                    <label for=\"nombre\">Apellido</label>
                    <input type=\"text\" class=\"form-control\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "surname", []), "html", null, true);
        echo "\" name=\"_apellido\" >
                </div>

                <div class=\"form-group\">
                    <label for=\"nombre\">Email</label>
                    <input type=\"text\" class=\"form-control\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", []), "html", null, true);
        echo "\" name=\"_email\" >
                </div>

                <div class=\"form-group\">
                    <label for=\"nombre\">Contraseña</label>
                    <input type=\"text\" class=\"form-control\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "password", []), "html", null, true);
        echo "\" name=\"_contraseña\" >
                </div>

                <div class=\"form-group\">
                    <label for=\"nombre\">Nombre de Usuario</label>
                    <input type=\"text\" class=\"form-control\" value=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", []), "html", null, true);
        echo "\" name=\"_nomusuario\">
                </div>-->

                <div class=\"col-md-12 text-center mt-3 mb-3\">
                    <button type=\"submit\" class=\"btn btn-primary\">Guardar</button>
                </div>
            </form>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Home/Perfil/perfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 77,  225 => 72,  217 => 67,  209 => 62,  201 => 57,  195 => 54,  191 => 53,  186 => 51,  182 => 50,  177 => 48,  173 => 47,  168 => 45,  164 => 44,  159 => 42,  155 => 41,  151 => 39,  146 => 36,  140 => 35,  134 => 33,  128 => 31,  126 => 30,  121 => 29,  118 => 28,  114 => 27,  107 => 22,  101 => 21,  95 => 19,  89 => 17,  86 => 16,  82 => 15,  77 => 12,  75 => 11,  70 => 9,  64 => 6,  60 => 4,  51 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block content %}
    <div class=\"col-md-4 offset-md-4 mt-5 card\">
        <div class=\"col-md-12 mt-4\">
            <form action=\"{{ path(\"profile\") }}\" method=\"post\">

                <h1 class=\"text-center\"><span class=\"badge badge-primary\">Perfil</span></h1>
                <input type=\"hidden\" name=\"id\" id=\"id\" value=\"{{ user.id }}\">

                {% if app.session.get('rol') == constant('LoginBundle\\\\Repository\\\\usersRepository::USER_ADMIN') %}

                <div class=\"form-group\">
                    <select class=\"form-control\" id=\"select_rol\" name=\"_select_rol\">
                        {% for r in roles %}
                            {% if user.rol == r %}
                                <option selected>{{ r }}</option>
                            {% else %}
                                <option>{{ r }}</option>
                            {% endif %}
                        {% endfor %}
                    </select>
                </div>

                <div class=\"form-group\">
                    <select class=\"form-control\" id=\"select_active\" name=\"_select_active\">
                        {% for a in status %}
                            {% if (user.active == 1) and (a == constant('LoginBundle\\\\Repository\\\\usersRepository::USER_ALTA')) %}
                                <option selected>{{ a }}</option>
                            {% elseif (user.active == 0) and (a == constant('LoginBundle\\\\Repository\\\\usersRepository::USER_BAJA')) %}
                                <option selected>{{ a }}</option>
                            {% else %}
                                <option> {{ a }}</option>
                            {% endif %}
                        {% endfor %}
                    </select>
                </div>
                {% endif %}


                {{ form_label(form.name) }}
                {{ form_widget(form.name,{'value':user.name}) }}

                {{ form_label(form.surname) }}
                {{ form_widget(form.surname,{'value':user.surname}) }}

                {{ form_label(form.email) }}
                {{ form_widget(form.email,{'value':user.email}) }}

                {{ form_label(form.password) }}
                {{ form_widget(form.password,{'value':user.password}) }}

                {{ form_label(form.username) }}
                {{ form_widget(form.username,{'value':user.username}) }}
                <!--<div class=\"form-group\">
                    <label for=\"nombre\">Nombre</label>
                    <input type=\"text\" class=\"form-control\" value=\"{{ user.name }}\" name=\"_nombre\">
                </div>

                <div class=\"form-group\">
                    <label for=\"nombre\">Apellido</label>
                    <input type=\"text\" class=\"form-control\" value=\"{{ user.surname }}\" name=\"_apellido\" >
                </div>

                <div class=\"form-group\">
                    <label for=\"nombre\">Email</label>
                    <input type=\"text\" class=\"form-control\" value=\"{{ user.email }}\" name=\"_email\" >
                </div>

                <div class=\"form-group\">
                    <label for=\"nombre\">Contraseña</label>
                    <input type=\"text\" class=\"form-control\" value=\"{{ user.password }}\" name=\"_contraseña\" >
                </div>

                <div class=\"form-group\">
                    <label for=\"nombre\">Nombre de Usuario</label>
                    <input type=\"text\" class=\"form-control\" value=\"{{ user.username }}\" name=\"_nomusuario\">
                </div>-->

                <div class=\"col-md-12 text-center mt-3 mb-3\">
                    <button type=\"submit\" class=\"btn btn-primary\">Guardar</button>
                </div>
            </form>
        </div>
    </div>
{% endblock %}", "@Home/Perfil/perfil.html.twig", "/home/nicolas/blog/src/HomeBundle/Resources/views/Perfil/perfil.html.twig");
    }
}
