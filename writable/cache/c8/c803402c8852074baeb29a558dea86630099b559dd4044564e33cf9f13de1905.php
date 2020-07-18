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

/* widget/categories.twig */
class __TwigTemplate_963d00b4aad55249366b95a56e05e43b20a4bf71699b6cfa9255005c65d0c425 extends Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["categoryList"] ?? null), 0, [], "any", false, false, false, 1)) {
            // line 2
            echo "<aside class=\"widget widget_categories sidebar-widget clearfix\">
\t<h3 class=\"widget-title\">分类目录</h3>
\t<ul>
\t\t";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categoryList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 6
                echo "        <li class=\"cat-item\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "url", [], "any", false, false, false, 6);
                echo "\" >";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 6);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "\t</ul>
</aside>
";
        }
    }

    public function getTemplateName()
    {
        return "widget/categories.twig";
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
        return new Source("{% if attribute(categoryList, 0) %}
<aside class=\"widget widget_categories sidebar-widget clearfix\">
\t<h3 class=\"widget-title\">分类目录</h3>
\t<ul>
\t\t{% for category in categoryList %}
        <li class=\"cat-item\"><a href=\"{{ category.url }}\" >{{ category.name }}</a></li>
        {% endfor %}
\t</ul>
</aside>
{% endif %}", "widget/categories.twig", "/var/www/html/blog-with-ci/public/theme/quest/widget/categories.twig");
    }
}
