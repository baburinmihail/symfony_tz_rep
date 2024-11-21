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

/* layout/base.html.twig */
class __TwigTemplate_e0c789476be8d4be02439873e2ff41f5 extends Template
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

        $this->parent = false;

        $this->blocks = [
            'main' => [$this, 'block_main'],
            'leftPanelColor' => [$this, 'block_leftPanelColor'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/base.html.twig"));

        // line 1
        yield "<!doctype html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"Mark Otto, Jacob Thornton, and Bootstrap contributors\">
    <meta name=\"generator\" content=\"Hugo 0.84.0\">
    <title>Dashboard Template · Bootstrap v5.0</title>
    <link rel=\"canonical\" href=\"https://getbootstrap.com/docs/5.0/examples/dashboard/\">
    <!-- Bootstrap core CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/dashboard.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
  </head>
  <body>
<header class=\"navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow\">
  <a class=\"navbar-brand col-md-3 col-lg-2 me-0 px-3\" href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_project_index");
        yield "\">IT Company</a>
  <button class=\"navbar-toggler position-absolute d-md-none collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#sidebarMenu\" aria-controls=\"sidebarMenu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>
  <!--
  <input class=\"form-control form-control-dark w-100\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">
  -->
  <div class=\"navbar-nav\">
    <div class=\"nav-item text-nowrap\">
      <!--<a class=\"nav-link px-3\" href=\"#\">Sign out--></a>
    </div>
  </div>
</header>
<div class=\"container-fluid\">
  <div class=\"row\">
    <nav id=\"sidebarMenu\" class=\"col-md-3 col-lg-2 d-md-block bg-light sidebar collapse\">
      <div class=\"position-sticky pt-3\">
        <ul class=\"nav flex-column\">
          <li class=\"nav-item\">
            <a class=\"nav-link\" aria-current=\"page\" id=\"Project\" href=\"";
        // line 52
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_project_index");
        yield "\">
              Project
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" id=\"Developers\" href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_developer_index");
        yield "\">
              Developers
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" id=\"AllStat\" href=\"";
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_all_stat");
        yield "\">
              Statistic
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <main class=\"col-md-9 ms-sm-auto col-lg-10 px-md-4\">
        <!--
      <div class=\"d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom\">
        <h1 class=\"h2\">Dashboard</h1>
      </div>
      <canvas class=\"my-4 w-100\" id=\"myChart\" width=\"900\" height=\"380\"></canvas>-->
      ";
        // line 75
        yield from $this->unwrap()->yieldBlock('main', $context, $blocks);
        // line 77
        yield "    </main>
  </div>
</div>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js\" integrity=\"sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE\" crossorigin=\"anonymous\"></script><script src=\"https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js\" integrity=\"sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha\" crossorigin=\"anonymous\"></script>
    ";
        // line 82
        yield from $this->unwrap()->yieldBlock('leftPanelColor', $context, $blocks);
        // line 84
        yield "  </body>
</html>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 75
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

        // line 76
        yield "      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 82
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

        // line 83
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layout/base.html.twig";
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
        return array (  203 => 83,  190 => 82,  179 => 76,  166 => 75,  152 => 84,  150 => 82,  143 => 77,  141 => 75,  125 => 62,  117 => 57,  109 => 52,  87 => 33,  80 => 29,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!doctype html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"Mark Otto, Jacob Thornton, and Bootstrap contributors\">
    <meta name=\"generator\" content=\"Hugo 0.84.0\">
    <title>Dashboard Template · Bootstrap v5.0</title>
    <link rel=\"canonical\" href=\"https://getbootstrap.com/docs/5.0/examples/dashboard/\">
    <!-- Bootstrap core CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href=\"{{ asset('assets/css/dashboard.css') }}\" rel=\"stylesheet\">
  </head>
  <body>
<header class=\"navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow\">
  <a class=\"navbar-brand col-md-3 col-lg-2 me-0 px-3\" href=\"{{ path('app_project_index') }}\">IT Company</a>
  <button class=\"navbar-toggler position-absolute d-md-none collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#sidebarMenu\" aria-controls=\"sidebarMenu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>
  <!--
  <input class=\"form-control form-control-dark w-100\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">
  -->
  <div class=\"navbar-nav\">
    <div class=\"nav-item text-nowrap\">
      <!--<a class=\"nav-link px-3\" href=\"#\">Sign out--></a>
    </div>
  </div>
</header>
<div class=\"container-fluid\">
  <div class=\"row\">
    <nav id=\"sidebarMenu\" class=\"col-md-3 col-lg-2 d-md-block bg-light sidebar collapse\">
      <div class=\"position-sticky pt-3\">
        <ul class=\"nav flex-column\">
          <li class=\"nav-item\">
            <a class=\"nav-link\" aria-current=\"page\" id=\"Project\" href=\"{{ path('app_project_index') }}\">
              Project
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" id=\"Developers\" href=\"{{ path('app_developer_index') }}\">
              Developers
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" id=\"AllStat\" href=\"{{ path('app_all_stat') }}\">
              Statistic
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <main class=\"col-md-9 ms-sm-auto col-lg-10 px-md-4\">
        <!--
      <div class=\"d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom\">
        <h1 class=\"h2\">Dashboard</h1>
      </div>
      <canvas class=\"my-4 w-100\" id=\"myChart\" width=\"900\" height=\"380\"></canvas>-->
      {% block main %}
      {% endblock %}
    </main>
  </div>
</div>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js\" integrity=\"sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE\" crossorigin=\"anonymous\"></script><script src=\"https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js\" integrity=\"sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha\" crossorigin=\"anonymous\"></script>
    {% block  leftPanelColor %}
    {% endblock %}
  </body>
</html>

", "layout/base.html.twig", "D:\\myprograme\\simphony\\actual\\my_project_directory\\my_project_directory\\templates\\layout\\base.html.twig");
    }
}
