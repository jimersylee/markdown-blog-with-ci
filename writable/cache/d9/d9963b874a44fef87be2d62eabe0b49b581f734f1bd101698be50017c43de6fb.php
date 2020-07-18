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

/* block/homeContent.twig */
class __TwigTemplate_076d00c93fe5c795096790401a116b39b2b11f59f0b07ccdd63c61152cd13a62 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div id=\"content\">
\t\t";
        // line 2
        if (($context["category"] ?? null)) {
            // line 3
            echo "\t\t\t";
            $context["navObj"] = ($context["category"] ?? null);
            // line 4
            echo "    \t";
        } elseif (($context["tag"] ?? null)) {
            // line 5
            echo "    \t\t";
            $context["navObj"] = ($context["tag"] ?? null);
            // line 6
            echo "    \t";
        } elseif (($context["yearMonth"] ?? null)) {
            // line 7
            echo "    \t\t";
            $context["navObj"] = ($context["yearMonth"] ?? null);
            // line 8
            echo "    \t";
        }
        // line 9
        echo "    \t
    \t";
        // line 10
        if ((($context["navObj"] ?? null) || ($context["keyword"] ?? null))) {
            // line 11
            echo "    \t\t";
            $this->loadTemplate("block/breadcrumbs.twig", "block/homeContent.twig", 11)->display($context);
            // line 12
            echo "    \t";
        }
        // line 13
        echo "\t<div class=\"quest-row site-content\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div id=\"primary\" class=\"content-area col-md-9\">
\t\t\t\t\t<div id=\"main\" class=\"site-main\" role=\"main\">
\t\t\t\t\t\t";
        // line 18
        if (($context["blogList"] ?? null)) {
            // line 19
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["blogList"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
                // line 20
                echo "\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 20)) {
                    // line 21
                    echo "\t\t\t\t\t        \t";
                    $this->loadTemplate("blog/blog.twig", "block/homeContent.twig", 21)->display($context);
                    // line 22
                    echo "\t\t\t\t\t        \t";
                }
                // line 23
                echo "\t\t\t\t\t        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "\t\t\t\t\t\t\t";
            $this->loadTemplate("block/nav.twig", "block/homeContent.twig", 24)->display($context);
            // line 25
            echo "\t\t\t\t\t\t";
        } else {
            // line 26
            echo "\t\t\t\t\t\t\t";
            $this->loadTemplate("block/noresult.twig", "block/homeContent.twig", 26)->display($context);
            // line 27
            echo "\t\t\t\t\t\t";
        }
        // line 28
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<!-- #main -->
\t\t\t\t</div>
\t\t\t\t";
        // line 31
        $this->loadTemplate("block/secondary.twig", "block/homeContent.twig", 31)->display($context);
        // line 32
        echo "\t\t\t</div>
\t\t\t<!-- .row -->
\t\t</div>
\t\t<!-- .container -->
\t</div>
\t<!-- .quest-row -->
</div><!-- #content -->
";
    }

    public function getTemplateName()
    {
        return "block/homeContent.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 32,  138 => 31,  133 => 28,  130 => 27,  127 => 26,  124 => 25,  121 => 24,  107 => 23,  104 => 22,  101 => 21,  98 => 20,  80 => 19,  78 => 18,  71 => 13,  68 => 12,  65 => 11,  63 => 10,  60 => 9,  57 => 8,  54 => 7,  51 => 6,  48 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"content\">
\t\t{% if category %}
\t\t\t{% set navObj=category %}
    \t{% elseif tag %}
    \t\t{% set navObj=tag %}
    \t{% elseif yearMonth %}
    \t\t{% set navObj=yearMonth %}
    \t{% endif%}
    \t
    \t{% if navObj or keyword %}
    \t\t{% include \"block/breadcrumbs.twig\" %}
    \t{% endif %}
\t<div class=\"quest-row site-content\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div id=\"primary\" class=\"content-area col-md-9\">
\t\t\t\t\t<div id=\"main\" class=\"site-main\" role=\"main\">
\t\t\t\t\t\t{% if blogList %}
\t\t\t\t\t\t\t{% for blog in blogList %}
\t\t\t\t\t\t\t\t{% if blog.title %}
\t\t\t\t\t        \t{% include \"blog/blog.twig\" %}
\t\t\t\t\t        \t{% endif %}
\t\t\t\t\t        {% endfor %}
\t\t\t\t\t\t\t{% include \"block/nav.twig\" %}
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t{% include \"block/noresult.twig\" %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t\t<!-- #main -->
\t\t\t\t</div>
\t\t\t\t{% include \"block/secondary.twig\" %}
\t\t\t</div>
\t\t\t<!-- .row -->
\t\t</div>
\t\t<!-- .container -->
\t</div>
\t<!-- .quest-row -->
</div><!-- #content -->
", "block/homeContent.twig", "/var/www/html/blog-with-ci/public/theme/quest/block/homeContent.twig");
    }
}
