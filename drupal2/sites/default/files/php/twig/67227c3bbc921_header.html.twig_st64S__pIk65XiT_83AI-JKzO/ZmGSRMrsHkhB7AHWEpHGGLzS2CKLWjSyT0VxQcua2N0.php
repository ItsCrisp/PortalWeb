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

/* themes/custom/exhibiz/templates/layout/header.html.twig */
class __TwigTemplate_c43997d5b349384de5304921bd741740 extends Template
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
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!-- header begin -->
<header class=\"transparent\">
  <div class=\"info\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"column\"> <span class=\"id-color\"><strong></strong></span>
          </div>
          <div class=\"column\"> <span class=\"id-color\"><strong></strong></span></div>
          <!-- social icons -->
          <div class=\"column social\">
            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>  ";
        // line 13
        yield "            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
            <a href=\"#\"><i class=\"fa fa-rss\"></i></a>
            <a href=\"#\"><i class=\"fa fa-google-plus\"></i></a>
            <a href=\"#\"><i class=\"fa fa-envelope-o\"></i></a>
          </div>
          <!-- social icons close -->
        </div>
      </div>
    </div>
  </div>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <!-- logo begin -->
        <div id=\"logo\">
          <a href=\"https://www.uazuay.edu.ec/\">
            <img class=\"logo\" src=\"";
        // line 29
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_logo"] ?? null), 29, $this->source), "html", null, true);
        yield "\" alt=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null), 29, $this->source), "html", null, true);
        yield "\" width=\"255\" height=\"69\">
          </a>
        </div>
        <!-- logo close -->

        <!--traductor-->

          <ul class=\" translate navbar-nav\" style=\"padding-right: 0.2rem; float: right;\">
            <li class=\"menu-item btn-english\" style=\"display: none;\">
              <a title=\"Traducir a Inglés\" href=\"javascript:doGTranslate('es|en')\" class=\"link\">
                <p class=\"bg-white text-dark text-small border rounded pt-0  ml-1 mb-0\" style=\"width: 28px; height: 28px;\"> EN </p>
              </a>
            </li>
            <li class=\"menu-item btn-spanish\" >
              <a title=\"Traducir a Español\" href=\"javascript:doGTranslate('es|es')\" class=\"link\">
                <p class=\"bg-white text-dark text-small border rounded pt-0  ml-1 mb-0\" style=\"width: 28px; height: 28px;\"> ES </p>
              </a>
            </li>
          </ul>



        <!-- small button begin -->
        <span id=\"menu-btn\"></span>
        <!-- small button close -->
        ";
        // line 54
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 54)) {
            // line 55
            yield "          ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
            yield "
        ";
        }
        // line 57
        yield "        <!-- mainmenu close -->



      </div>
    </div>
  </div>
</header>
<!-- header close -->
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["site_logo", "site_slogan", "page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/exhibiz/templates/layout/header.html.twig";
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
        return array (  113 => 57,  107 => 55,  105 => 54,  75 => 29,  57 => 13,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/exhibiz/templates/layout/header.html.twig", "C:\\xampp\\htdocs\\drupal2\\themes\\custom\\exhibiz\\templates\\layout\\header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 54);
        static $filters = array("escape" => 29);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
