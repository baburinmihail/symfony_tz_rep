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

/* all_stat/index.html.twig */
class __TwigTemplate_86cd83fe9772c54a67d3f1a14f6bd74f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "all_stat/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "all_stat/index.html.twig"));

        $this->parent = $this->loadTemplate("layout/base.html.twig", "all_stat/index.html.twig", 1);
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
        yield "   <h1>Общая статистика</h1>
        <div class=\"row row-cols-1 row-cols-md-3 mb-3 text-center\">
            <div class=\"col\">
                <div class=\"card mb-4 rounded-3 shadow-sm\">
                    <div class=\"card-header py-3\">
                        <h4 class=\"my-0 fw-normal\">Количество проектов</h4>
                    </div>
                    <div class=\"card-body\">
                        <h1 class=\"card-title pricing-card-title\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["count_project"]) || array_key_exists("count_project", $context) ? $context["count_project"] : (function () { throw new RuntimeError('Variable "count_project" does not exist.', 11, $this->source); })()), "html", null, true);
        yield "</h1>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card mb-4 rounded-3 shadow-sm\">
                    <div class=\"card-header py-3\">
                        <h4 class=\"my-0 fw-normal\">Количество сотрудников</h4>
                    </div>
                    <div class=\"card-body\">
                        <h1 class=\"card-title pricing-card-title\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["count_peaple"]) || array_key_exists("count_peaple", $context) ? $context["count_peaple"] : (function () { throw new RuntimeError('Variable "count_peaple" does not exist.', 21, $this->source); })()), "html", null, true);
        yield "</h1>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card mb-4 rounded-3 shadow-sm\">
                    <div class=\"card-header py-3\">
                        <h4 class=\"my-0 fw-normal\">Средний возраст</h4>
                    </div>
                    <div class=\"card-body\">
                        <h1 class=\"card-title pricing-card-title\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statistic_age_midle"]) || array_key_exists("statistic_age_midle", $context) ? $context["statistic_age_midle"] : (function () { throw new RuntimeError('Variable "statistic_age_midle" does not exist.', 31, $this->source); })()), "html", null, true);
        yield "</h1>
                    </div>
                </div>
            </div>
        </div>



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 40
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

        // line 41
        yield "  <script>
      var elem = document.getElementById('AllStat');
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
        return "all_stat/index.html.twig";
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
        return array (  146 => 41,  133 => 40,  113 => 31,  100 => 21,  87 => 11,  77 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout/base.html.twig' %}
{% block main %}
   <h1>Общая статистика</h1>
        <div class=\"row row-cols-1 row-cols-md-3 mb-3 text-center\">
            <div class=\"col\">
                <div class=\"card mb-4 rounded-3 shadow-sm\">
                    <div class=\"card-header py-3\">
                        <h4 class=\"my-0 fw-normal\">Количество проектов</h4>
                    </div>
                    <div class=\"card-body\">
                        <h1 class=\"card-title pricing-card-title\">{{ count_project }}</h1>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card mb-4 rounded-3 shadow-sm\">
                    <div class=\"card-header py-3\">
                        <h4 class=\"my-0 fw-normal\">Количество сотрудников</h4>
                    </div>
                    <div class=\"card-body\">
                        <h1 class=\"card-title pricing-card-title\">{{ count_peaple }}</h1>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card mb-4 rounded-3 shadow-sm\">
                    <div class=\"card-header py-3\">
                        <h4 class=\"my-0 fw-normal\">Средний возраст</h4>
                    </div>
                    <div class=\"card-body\">
                        <h1 class=\"card-title pricing-card-title\">{{ statistic_age_midle }}</h1>
                    </div>
                </div>
            </div>
        </div>



{% endblock %}
{% block  leftPanelColor %}
  <script>
      var elem = document.getElementById('AllStat');
      elem.style.color = 'red'; 
  </script>
{% endblock %}
", "all_stat/index.html.twig", "D:\\myprograme\\simphony\\actual\\my_project_directory\\my_project_directory\\templates\\all_stat\\index.html.twig");
    }
}
