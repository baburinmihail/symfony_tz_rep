<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* developer/all_developers.html.twig */
class __TwigTemplate_724e2282a328f9a7fba4d6bae20d6910 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
            'leftPanelColor' => [$this, 'block_leftPanelColor'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "layout/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "developer/all_developers.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "developer/all_developers.html.twig"));

        $this->parent = $this->loadTemplate("layout/base.html.twig", "developer/all_developers.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 3
        yield "    <h2>Все разработчики</h2>
    <div class=\"table-responsive\">
      <table class=\"table table-striped table-sm\">
        <thead>
          <tr>
            <th scope=\"col\">Id</th>
            <th scope=\"col\">Name</th>
            <th scope=\"col\">Post_dev</th>
            <th scope=\"col\">Email</th>
            <th scope=\"col\">Phone</th>
            <th scope=\"col\">Age</th>
            <th scope=\"col\"></th>
            <th scope=\"col\"><a class=\"btn btn-secondary\" href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_developer_new");
        yield "\">Create new</a></th>
          </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["developers"]) || array_key_exists("developers", $context) ? $context["developers"] : (function () { throw new RuntimeError('Variable "developers" does not exist.', 19, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["developer"]) {
            // line 20
            yield "          <tr>
            <td>";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["developer"], "id", [], "any", false, false, false, 21), "html", null, true);
            yield "</td>
            <td>";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["developer"], "name", [], "any", false, false, false, 22), "html", null, true);
            yield "</td>
            <td>";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["developer"], "postDev", [], "any", false, false, false, 23), "html", null, true);
            yield "</td>
            <td>";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["developer"], "email", [], "any", false, false, false, 24), "html", null, true);
            yield "</td>
            <td>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["developer"], "phone", [], "any", false, false, false, 25), "html", null, true);
            yield "</td>
            <td>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["developer"], "age", [], "any", false, false, false, 26), "html", null, true);
            yield "</td>
            <td>
                <a class=\"btn btn-warning\" href=\"";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_developer_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["developer"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            yield "\">edit</a>
            </td>
            <td>
              <form method=\"post\" action=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_developer_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["developer"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                  <input type=\"hidden\" name=\"_token\" value=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["developer"], "id", [], "any", false, false, false, 32))), "html", null, true);
            yield "\">
                  <button class=\"btn btn-danger\">Delete</button>
              </form>
            </td>
          </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            yield "            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['developer'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "        </tbody>  
        </tbody>
      </table>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 47
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_leftPanelColor(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "leftPanelColor"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "leftPanelColor"));

        // line 48
        yield "  <script>
      var elem = document.getElementById('Developers');
      elem.style.color = 'red'; 
  </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "developer/all_developers.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  189 => 48,  176 => 47,  161 => 42,  152 => 38,  141 => 32,  137 => 31,  131 => 28,  126 => 26,  122 => 25,  118 => 24,  114 => 23,  110 => 22,  106 => 21,  103 => 20,  98 => 19,  91 => 15,  77 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout/base.html.twig' %}
{% block main %}
    <h2>Все разработчики</h2>
    <div class=\"table-responsive\">
      <table class=\"table table-striped table-sm\">
        <thead>
          <tr>
            <th scope=\"col\">Id</th>
            <th scope=\"col\">Name</th>
            <th scope=\"col\">Post_dev</th>
            <th scope=\"col\">Email</th>
            <th scope=\"col\">Phone</th>
            <th scope=\"col\">Age</th>
            <th scope=\"col\"></th>
            <th scope=\"col\"><a class=\"btn btn-secondary\" href=\"{{ path('app_developer_new') }}\">Create new</a></th>
          </tr>
        </thead>
        <tbody>
        {% for developer in developers %}
          <tr>
            <td>{{ developer.id }}</td>
            <td>{{ developer.name }}</td>
            <td>{{ developer.postDev }}</td>
            <td>{{ developer.email }}</td>
            <td>{{ developer.phone }}</td>
            <td>{{ developer.age }}</td>
            <td>
                <a class=\"btn btn-warning\" href=\"{{ path('app_developer_edit', {'id': developer.id}) }}\">edit</a>
            </td>
            <td>
              <form method=\"post\" action=\"{{ path('app_developer_delete', {'id': developer.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                  <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ developer.id) }}\">
                  <button class=\"btn btn-danger\">Delete</button>
              </form>
            </td>
          </tr>
        {% else %}
            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>  
        </tbody>
      </table>
    </div>
{% endblock %}
{% block  leftPanelColor %}
  <script>
      var elem = document.getElementById('Developers');
      elem.style.color = 'red'; 
  </script>
{% endblock %}
", "developer/all_developers.html.twig", "D:\\myprograme\\simphony\\actual\\my_project_directory\\my_project_directory\\templates\\developer\\all_developers.html.twig");
    }
}
