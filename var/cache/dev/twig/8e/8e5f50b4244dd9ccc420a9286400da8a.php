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

/* project/all_projects.html.twig */
class __TwigTemplate_f88ee645e93de1ddb93bb30f9bced65b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/all_projects.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/all_projects.html.twig"));

        $this->parent = $this->loadTemplate("layout/base.html.twig", "project/all_projects.html.twig", 1);
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
        yield "    <h2>Все проекты</h2>
    <div class=\"table-responsive\">
      <table class=\"table table-striped table-sm\">
        <thead>
          <tr>
            <th scope=\"col\">Id</th>
            <th scope=\"col\">NameProject</th>
            <th scope=\"col\">Client</th>
            <th scope=\"col\">Developer_company</th>
            <th scope=\"col\"></th>
            <th scope=\"col\"></th>
            <th scope=\"col\"><a class=\"btn btn-secondary\" href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_project_new");
        yield "\">Create new</a></th>
          </tr>
        </thead>
        <tbody>
          ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["projects"]) || array_key_exists("projects", $context) ? $context["projects"] : (function () { throw new RuntimeError('Variable "projects" does not exist.', 18, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 19
            yield "            <tr>
                <td>";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 20), "html", null, true);
            yield "</td>
                <td>";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "name", [], "any", false, false, false, 21), "html", null, true);
            yield "</td>
                <td>";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "client", [], "any", false, false, false, 22), "html", null, true);
            yield "</td>
                <td>";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "client", [], "any", false, false, false, 23), "html", null, true);
            yield "</td>
                <td>
                    <a class=\"btn btn-info\" href=\"";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_project_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            yield "\">show</a>
                </td>
                <td>
                    <a class=\"btn btn-warning\" href=\"";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_project_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            yield "\">edit</a>
                </td>
                <td>
                    <form method=\"post\" action=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_project_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                      <input type=\"hidden\" name=\"_token\" value=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 32))), "html", null, true);
            yield "\">
                      <button class=\"btn btn-danger\">Delete</button>
                    </form>
                </td>
            </tr>
          ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 37
            yield "  
            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['project'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "        </tbody>
      </table>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 46
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

        // line 47
        yield "  <script>
      var elem = document.getElementById('Project');
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
        return "project/all_projects.html.twig";
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
        return array (  186 => 47,  173 => 46,  159 => 42,  149 => 37,  138 => 32,  134 => 31,  128 => 28,  122 => 25,  117 => 23,  113 => 22,  109 => 21,  105 => 20,  102 => 19,  97 => 18,  90 => 14,  77 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout/base.html.twig' %}
{% block main %}
    <h2>Все проекты</h2>
    <div class=\"table-responsive\">
      <table class=\"table table-striped table-sm\">
        <thead>
          <tr>
            <th scope=\"col\">Id</th>
            <th scope=\"col\">NameProject</th>
            <th scope=\"col\">Client</th>
            <th scope=\"col\">Developer_company</th>
            <th scope=\"col\"></th>
            <th scope=\"col\"></th>
            <th scope=\"col\"><a class=\"btn btn-secondary\" href=\"{{ path('app_project_new') }}\">Create new</a></th>
          </tr>
        </thead>
        <tbody>
          {% for project in projects %}
            <tr>
                <td>{{ project.id }}</td>
                <td>{{ project.name }}</td>
                <td>{{ project.client }}</td>
                <td>{{ project.client }}</td>
                <td>
                    <a class=\"btn btn-info\" href=\"{{ path('app_project_show', {'id': project.id}) }}\">show</a>
                </td>
                <td>
                    <a class=\"btn btn-warning\" href=\"{{ path('app_project_edit', {'id': project.id}) }}\">edit</a>
                </td>
                <td>
                    <form method=\"post\" action=\"{{ path('app_project_delete', {'id': project.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                      <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ project.id) }}\">
                      <button class=\"btn btn-danger\">Delete</button>
                    </form>
                </td>
            </tr>
          {% else %}  
            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
          {% endfor %}
        </tbody>
      </table>
    </div>
{% endblock %}
{% block  leftPanelColor %}
  <script>
      var elem = document.getElementById('Project');
      elem.style.color = 'red'; 
  </script>
{% endblock %}
", "project/all_projects.html.twig", "D:\\myprograme\\simphony\\actual\\my_project_directory\\my_project_directory\\templates\\project\\all_projects.html.twig");
    }
}
