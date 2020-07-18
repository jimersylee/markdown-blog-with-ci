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

/* widget/recent.twig */
class __TwigTemplate_50590a18e7aec1fabeab796193f7d39520f18a787163a201f4ce1298c4fd3a09 extends Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["recentBlogList"] ?? null), 0, [], "any", false, false, false, 1)) {
            // line 2
            echo "<aside class=\"widget widget_recent_entries sidebar-widget clearfix\">
\t<h3 class=\"widget-title\">近期文章</h3>
\t<ul>
\t";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recentBlogList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
                // line 6
                echo "    <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "siteURL", [], "any", false, false, false, 6);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 6);
                echo "</a></li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "\t</ul>
</aside>
";
        }
    }

    public function getTemplateName()
    {
        return "widget/recent.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 8,  48 => 6,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if attribute(recentBlogList, 0) %}
<aside class=\"widget widget_recent_entries sidebar-widget clearfix\">
\t<h3 class=\"widget-title\">近期文章</h3>
\t<ul>
\t{% for blog in recentBlogList %}
    <li><a href=\"{{ blog.siteURL }}\">{{ blog.title }}</a></li>
    {% endfor %}
\t</ul>
</aside>
{% endif %}", "widget/recent.twig", "/var/www/html/blog-with-ci/public/theme/quest/widget/recent.twig");
    }
}
