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

/* themes/custom/exhibiz/templates/menu--main.html.twig */
class __TwigTemplate_5508cafa869e3488f7ad2f0f2fe0349d extends Template
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
        // line 21
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 22
        yield "
";
        // line 27
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 27, $context, $this->getSourceContext()));
        yield "

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "attributes", "menu_level", "loop"]);        yield from [];
    }

    // line 29
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = [
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 30
            yield "  ";
            $macros["menus"] = $this;
            // line 31
            yield "  ";
            if (($context["items"] ?? null)) {
                // line 32
                yield "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 33
                    yield "<ul";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", ["id", "mainmenu"], "method", false, false, true, 33), 33, $this->source), "html", null, true);
                    yield " ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["ms-2 dotted-separator"], "method", false, false, true, 33), 33, $this->source), "html", null, true);
                    yield ">
  ";
                } else {
                    // line 35
                    yield "  <ul class=\"dropdown-menu\">
    ";
                }
                // line 37
                yield "    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 38
                    yield "      ";
                    $context["menu_attributes"] = $this->extensions['Drupal\menus_attribute\Template\TwigExtension']->menusAttribute($this->sandbox->ensureToStringAllowed((($__internal_compile_0 = Twig\Extension\CoreExtension::keys($this->sandbox->ensureToStringAllowed(($context["items"] ?? null), 38, $this->source))) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 38)] ?? null) : null), 38, $this->source));
                    // line 39
                    yield "      ";
                    // line 40
                    $context["classes"] = [((                    // line 41
($context["menu_level"] ?? null)) ? ("dropdown-item dropdown-submenu") : ("nav-item")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 42
$context["item"], "is_expanded", [], "any", false, false, true, 42)) ? ("menu-item--expanded") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 43
$context["item"], "is_collapsed", [], "any", false, false, true, 43)) ? ("menu-item--collapsed") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 44
$context["item"], "in_active_trail", [], "any", false, false, true, 44)) ? ("active") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 45
$context["item"], "below", [], "any", false, false, true, 45)) ? ("dropdown") : ("")), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 46
($context["menu_attributes"] ?? null), "item", [], "any", false, false, true, 46), "class", [], "any", false, false, true, 46)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["menu_attributes"] ?? null), "item", [], "any", false, false, true, 46), "class", [], "any", false, false, true, 46)) : (""))];
                    // line 49
                    yield "      <li";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 49), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 49), 49, $this->source), "html", null, true);
                    yield "
        ";
                    // line 50
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["menu_attributes"] ?? null), "item", [], "any", false, false, true, 50), "id", [], "any", false, false, true, 50)) {
                        // line 51
                        yield "          ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 51), "setAttribute", ["id", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["menu_attributes"] ?? null), "item", [], "any", false, false, true, 51), "id", [], "any", false, false, true, 51)], "method", false, false, true, 51), 51, $this->source), "html", null, true);
                        yield "
        ";
                    }
                    // line 53
                    yield "        ";
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["menu_attributes"] ?? null), "item", [], "any", false, false, true, 53), "style", [], "any", false, false, true, 53)) {
                        // line 54
                        yield "          ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 54), "setAttribute", ["style", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["menu_attributes"] ?? null), "item", [], "any", false, false, true, 54), "style", [], "any", false, false, true, 54)], "method", false, false, true, 54), 54, $this->source), "html", null, true);
                        yield "
        ";
                    }
                    // line 56
                    yield "      >
        ";
                    // line 58
                    $context["link_classes"] = [(( !                    // line 59
($context["menu_level"] ?? null)) ? ("nav-link") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 60
$context["item"], "in_active_trail", [], "any", false, false, true, 60)) ? ("active") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 61
$context["item"], "below", [], "any", false, false, true, 61)) ? ("dropdown-toggle") : ("")), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 62
$context["item"], "url", [], "any", false, false, true, 62), "getOption", ["attributes"], "method", false, false, true, 62), "class", [], "any", false, false, true, 62)) ? (Twig\Extension\CoreExtension::join($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 62), "getOption", ["attributes"], "method", false, false, true, 62), "class", [], "any", false, false, true, 62), 62, $this->source), " ")) : ("")), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 63
($context["menu_attributes"] ?? null), "link", [], "any", false, false, true, 63), "class", [], "any", false, false, true, 63)];
                    // line 66
                    yield "        ";
                    $context["varTarget"] = " ";
                    // line 67
                    yield "        ";
                    $context["varId"] = " ";
                    // line 68
                    yield "        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["menu_attributes"] ?? null), "link", [], "any", false, false, true, 68));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["i"] => $context["menu"]) {
                        // line 69
                        yield "          ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 69) == 1)) {
                            // line 70
                            yield "            ";
                            $context["varId"] = $context["menu"];
                            // line 71
                            yield "          ";
                        }
                        // line 72
                        yield "          ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 72) == 2)) {
                            // line 73
                            yield "            ";
                            $context["varTarget"] = $context["menu"];
                            // line 74
                            yield "          ";
                        }
                        // line 75
                        yield "        ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['i'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 76
                    yield "        ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 76)) {
                        // line 77
                        yield "          ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 77), 77, $this->source), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 77), 77, $this->source), ["class" => ($context["link_classes"] ?? null), "data-toggle" => "dropdown", "aria-expanded" => "false", "aria-haspopup" => "true"]), "html", null, true);
                        yield "
          ";
                        // line 78
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_links", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 78), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 78, $context, $this->getSourceContext()));
                        yield "
        ";
                    } else {
                        // line 80
                        yield "          ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 80) == "<nolink>")) {
                            // line 81
                            yield "            ";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::merge($this->extensions['Drupal\Core\Template\TwigExtension']->getLink("", $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 81), 81, $this->source), ["class" => ($context["link_classes"] ?? null)]), ["#attributes" => ["target" => ($context["varTarget"] ?? null), "id" => ($context["varId"] ?? null)]]), "html", null, true);
                            yield "
          ";
                        } else {
                            // line 83
                            yield "            ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 83) == "Inicio")) {
                                // line 84
                                yield "              ";
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::merge($this->extensions['Drupal\Core\Template\TwigExtension']->getLink("", $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 84), 84, $this->source), ["class" => ($context["link_classes"] ?? null)]), ["#attributes" => ["id" => ($context["varId"] ?? null)]]), "html", null, true);
                                yield "
            ";
                            } else {
                                // line 86
                                yield "              ";
                                if ((($context["varTarget"] ?? null) == "_blank")) {
                                    // line 87
                                    yield "                ";
                                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::merge($this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 87), 87, $this->source), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 87), 87, $this->source), ["class" => ($context["link_classes"] ?? null)]), ["#attributes" => ["target" => ($context["varTarget"] ?? null), "id" => ($context["varId"] ?? null)]]), "html", null, true);
                                    yield "
              ";
                                } else {
                                    // line 89
                                    yield "                ";
                                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::merge($this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 89), 89, $this->source), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 89), 89, $this->source), ["class" => ($context["link_classes"] ?? null)]), ["#attributes" => ["id" => ($context["varId"] ?? null)]]), "html", null, true);
                                    yield "
              ";
                                }
                                // line 91
                                yield "            ";
                            }
                            // line 92
                            yield "          ";
                        }
                        // line 93
                        yield "        ";
                    }
                    // line 94
                    yield "      </li>
    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 96
                yield "  </ul>
  ";
            }
            // line 98
            yield "  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/exhibiz/templates/menu--main.html.twig";
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
        return array (  286 => 98,  282 => 96,  267 => 94,  264 => 93,  261 => 92,  258 => 91,  252 => 89,  246 => 87,  243 => 86,  237 => 84,  234 => 83,  228 => 81,  225 => 80,  220 => 78,  215 => 77,  212 => 76,  198 => 75,  195 => 74,  192 => 73,  189 => 72,  186 => 71,  183 => 70,  180 => 69,  162 => 68,  159 => 67,  156 => 66,  154 => 63,  153 => 62,  152 => 61,  151 => 60,  150 => 59,  149 => 58,  146 => 56,  140 => 54,  137 => 53,  131 => 51,  129 => 50,  124 => 49,  122 => 46,  121 => 45,  120 => 44,  119 => 43,  118 => 42,  117 => 41,  116 => 40,  114 => 39,  111 => 38,  93 => 37,  89 => 35,  81 => 33,  78 => 32,  75 => 31,  72 => 30,  58 => 29,  49 => 27,  46 => 22,  44 => 21,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/exhibiz/templates/menu--main.html.twig", "C:\\xampp\\htdocs\\drupal2\\themes\\custom\\exhibiz\\templates\\menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 21, "macro" => 29, "if" => 31, "for" => 37, "set" => 38);
        static $filters = array("escape" => 33, "keys" => 38, "join" => 62, "merge" => 81);
        static $functions = array("menus_attribute" => 38, "link" => 77);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape', 'keys', 'join', 'merge'],
                ['menus_attribute', 'link'],
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
