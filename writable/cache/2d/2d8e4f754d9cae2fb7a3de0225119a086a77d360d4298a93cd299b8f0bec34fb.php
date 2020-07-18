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

/* widget/tagcloud.twig */
class __TwigTemplate_23ac80c6e7072da9f155ccd7c4ae7a64880351ee18040d4987b3704c038be880 extends Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["tagsList"] ?? null), 0, [], "any", false, false, false, 1)) {
            // line 2
            echo "<aside class=\"widget widget_tag_cloud sidebar-widget clearfix\">
\t<h3 class=\"widget-title\">标签</h3>
\t<div class=\"tagcloud\">
\t";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tagsList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 6
                echo "\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "url", [], "any", false, false, false, 6);
                echo "\"  title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 6);
                echo "\" >";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 6);
                echo "</a>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "\t</div>
</aside>
";
        }
    }

    public function getTemplateName()
    {
        return "widget/tagcloud.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 8,  48 => 6,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if attribute(tagsList, 0) %}
<aside class=\"widget widget_tag_cloud sidebar-widget clearfix\">
\t<h3 class=\"widget-title\">标签</h3>
\t<div class=\"tagcloud\">
\t{% for tag in tagsList %}
\t<a href=\"{{ tag.url }}\"  title=\"{{ tag.name }}\" >{{ tag.name }}</a>
\t{% endfor %}
\t</div>
</aside>
{% endif %}", "widget/tagcloud.twig", "/var/www/html/blog-with-ci/public/theme/quest/widget/tagcloud.twig");
    }
}
