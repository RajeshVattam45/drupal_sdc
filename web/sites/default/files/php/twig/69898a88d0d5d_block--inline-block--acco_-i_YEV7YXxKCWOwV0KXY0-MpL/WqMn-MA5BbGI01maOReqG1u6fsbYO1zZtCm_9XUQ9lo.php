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

/* themes/custom/tech_comp/templates/block/block--inline-block--accordion-block.html.twig */
class __TwigTemplate_1fed384f28b49361dde0f7c6ca97ac90 extends Template
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
        // line 4
        yield "
";
        // line 6
        $context["theme"] = "white";
        // line 7
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_block_type", [], "any", true, true, true, 7) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 8
($context["content"] ?? null), "field_block_type", [], "any", false, true, true, 8), "#items", [], "array", true, true, true, 8)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (($_v0 = CoreExtension::getAttribute($this->env, $this->source,         // line 9
($context["content"] ?? null), "field_block_type", [], "any", false, false, true, 9)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#items"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_block_type", [], "any", false, false, true, 9), "#items", [], "array", false, false, true, 9))) > 0)) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v1 = CoreExtension::getAttribute($this->env, $this->source,         // line 10
($context["content"] ?? null), "field_block_type", [], "any", false, false, true, 10)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1["#items"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_block_type", [], "any", false, false, true, 10), "#items", [], "array", false, false, true, 10)), 0, [], "any", false, false, true, 10), "value", [], "any", false, false, true, 10)))) {
            // line 12
            yield "  ";
            $context["theme"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_block_type", [], "any", false, false, true, 12)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2["#items"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_block_type", [], "any", false, false, true, 12), "#items", [], "array", false, false, true, 12)), 0, [], "any", false, false, true, 12), "value", [], "any", false, false, true, 12);
        }
        // line 14
        yield "
";
        // line 16
        $context["accordion_items"] = $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(($context["content"] ?? null), "field_block_type");
        // line 17
        yield "
";
        // line 18
        if ((($tmp = ($context["accordion_items"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 19
            yield "  <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["accordion-block", ("theme-" . ($context["theme"] ?? null))], "method", false, false, true, 19), "html", null, true);
            yield "
       data-accordion-group>

    ";
            // line 22
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true);
            yield "
    ";
            // line 23
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true);
            yield "

    ";
            // line 25
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["accordion_items"] ?? null), "html", null, true);
            yield "

  </div>
";
        } else {
            // line 29
            yield "  ";
            // line 30
            yield "  ";
            if ((($tmp = ($context["is_admin"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 31
                yield "    <div class=\"accordion-block accordion-block--empty\">
      <em>No accordion items added.</em>
    </div>
  ";
            }
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content", "attributes", "title_prefix", "title_suffix", "is_admin"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/tech_comp/templates/block/block--inline-block--accordion-block.html.twig";
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
        return array (  96 => 31,  93 => 30,  91 => 29,  84 => 25,  79 => 23,  75 => 22,  68 => 19,  66 => 18,  63 => 17,  61 => 16,  58 => 14,  54 => 12,  52 => 10,  51 => 9,  50 => 8,  49 => 7,  47 => 6,  44 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
  Inline block template for Accordion Block (Layout Builder)
#}

{# Safely determine theme value #}
{% set theme = 'white' %}
{% if content.field_block_type is defined
  and content.field_block_type['#items'] is defined
  and content.field_block_type['#items']|length > 0
  and content.field_block_type['#items'].0.value is not empty
%}
  {% set theme = content.field_block_type['#items'].0.value %}
{% endif %}

{# Safely render block only if there is content #}
{% set accordion_items = content|without('field_block_type') %}

{% if accordion_items %}
  <div{{ attributes.addClass('accordion-block', 'theme-' ~ theme) }}
       data-accordion-group>

    {{ title_prefix }}
    {{ title_suffix }}

    {{ accordion_items }}

  </div>
{% else %}
  {# Layout Builder / editor fallback #}
  {% if is_admin %}
    <div class=\"accordion-block accordion-block--empty\">
      <em>No accordion items added.</em>
    </div>
  {% endif %}
{% endif %}
", "themes/custom/tech_comp/templates/block/block--inline-block--accordion-block.html.twig", "C:\\xampp\\htdocs\\drupal_sdc\\web\\themes\\custom\\tech_comp\\templates\\block\\block--inline-block--accordion-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 6, "if" => 7];
        static $filters = ["length" => 9, "without" => 16, "escape" => 19];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['length', 'without', 'escape'],
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
