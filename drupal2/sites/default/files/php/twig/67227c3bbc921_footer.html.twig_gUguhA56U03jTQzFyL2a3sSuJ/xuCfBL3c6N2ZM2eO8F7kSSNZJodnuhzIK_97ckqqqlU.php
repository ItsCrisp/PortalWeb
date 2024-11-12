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

/* themes/custom/exhibiz/templates/layout/footer.html.twig */
class __TwigTemplate_a23804211102f95d1d649df043390966 extends Template
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
        yield "<!-- footer begin -->
<footer class=\"style-2 footer-exhibiz\">
  <div class=\"container\">
    <div class=\"row mt-4\">
      <div class=\"col text-start\">
        <h6 class=\"footer-title text-light\"><strong>Sitio web</strong></h6>
        <ul class=\"list-unstyled text-small\">
          <li><a class=\"text-muted\" href=\"https://www.uazuay.edu.ec/sitemap\" target=\"_blank\">Mapa de sitio</a></li>
        </ul>
      </div>

      <div class=\"col text-start\">
        <h6 class=\"footer-title text-light\"><strong>Contáctenos</strong></h6>
        <ul class=\"list-unstyled text-small\">
          <li style=\"margin-bottom: 0px;\"><a class=\"text-muted\" href=\"https://www.uazuay.edu.ec/acerca-uda/contacto-uda\" target=\"_blank\">Contacto UDA</a></li>
          <li style=\"margin-bottom: 0px;\"><a class=\"text-muted\" href=\"https://www.uazuay.edu.ec/acerca-uda/direccion-mapas\" target=\"_blank\">Mapa y dirección</a></li>
          <li style=\"margin-bottom: 0px;\"><a class=\"text-muted\" href=\"https://www.uazuay.edu.ec/acerca-uda/redes-sociales\" target=\"_blank\">Redes sociales</a></li>
        </ul>
      </div>

      <div class=\"col text-start\">
        <h6 class=\"footer-title text-light\"><strong>Servicios web</strong></h6>
        <ul class=\"list-unstyled text-small\">
          <li style=\"margin-bottom: 0px;\"><a class=\"text-muted\" href=\"https://www.uazuay.edu.ec/bibliotecas\" target=\"_blank\" title=\"Bibliotecas\">Bibliotecas</a></li>
          <li style=\"margin-bottom: 0px;\"><a class=\"text-muted\" href=\"https://www.uazuay.edu.ec/portal/\" target=\"_blank\" title=\"Portal\">Portal</a></li>
          <li style=\"margin-bottom: 0px;\"><a class=\"text-muted\" href=\"https://www.uazuay.edu.ec/correo-electronico\" target=\"_blank\" title=\"Correo\">Correo</a></li>
          <li style=\"margin-bottom: 0px;\"><a class=\"text-muted\" href=\"https://www.uazuay.edu.ec/acerca-uda/redes-wifi\" target=\"_blank\" title=\"Red wifi\">Red wifi</a></li>
        </ul>

      </div>
      <div class=\"col text-start\">
        <div class=\"row\">
          <div class=\"col-lg-12\">
            <h6 class=\"footer-title text-light\"><strong>Conecta</strong></h6>
            <div class=\"social-icons\">
                <a class=\"wow fadeInUp\" target=\"_blank\" href=\"https://www.facebook.com/uazuay\" rel=\"noreferrer\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a>
                <a class=\"wow fadeInDown\" target=\"_blank\" href=\"https://www.instagram.com/accounts/login/?next=/uda.oficial/\" rel=\"noreferrer\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a>
                <a class=\"wow fadeInUp\" target=\"_blank\" href=\"https://twitter.com/uazuay/\" rel=\"noreferrer\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-twitter-x\" viewBox=\"0 0 16 16\">
                        <path d=\"M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z\"/>
                    </svg>
                </a>
                <a class=\"wow fadeInDown\" target=\"_blank\" href=\"https://www.youtube.com/channel/UCUkESMoN6-hBdvh5bRrmLKQ\" rel=\"noreferrer\"><i class=\"fa fa-youtube\" aria-hidden=\"true\"></i></a>
                <a class=\"wow fadeInUp\" target=\"_blank\"  href=\"https://radiouda.uazuay.edu.ec/servicios/radiouda/\"><i class=\"fa fa-microphone\" aria-hidden=\"true\"></i></a>
                <a class=\"wow fadeInDown\" target=\"_blank\" href=\"https://www.uazuay.edu.ec/acerca-uda/uda-app\"><i class=\"fa fa-th\" aria-hidden=\"true\"></i></a>

            </div>
          </div>
        </div>

      </div>

      <div class=\"col\">
        <img src=\"";
        // line 54
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_logo"] ?? null), 54, $this->source), "html", null, true);
        yield "\" class=\"img-fluid mx-auto d-block\" alt=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
        yield "\" width=\"255\" height=\"69\" >
      </div>
    </div>
  </div>
  <a href=\"#\" id=\"back-to-top\" class=\"custom-1\"></a>
</footer>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["site_logo"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/exhibiz/templates/layout/footer.html.twig";
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
        return array (  99 => 54,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/exhibiz/templates/layout/footer.html.twig", "C:\\xampp\\htdocs\\drupal2\\themes\\custom\\exhibiz\\templates\\layout\\footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 54, "t" => 54);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 't'],
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
