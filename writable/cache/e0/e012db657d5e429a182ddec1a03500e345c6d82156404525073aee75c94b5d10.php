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

/* blog/footer.twig */
class __TwigTemplate_0a32fd11bfbf4c41b4b178a9809d92e2842ee22099b821493c98dd9488411685 extends Template
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
        echo "<footer class=\"entry-footer\">
\t";
        // line 2
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "category", [], "any", false, false, false, 2), 0, [], "any", false, false, false, 2)) {
            // line 3
            echo "\t<ul class=\"post-categories\">
        ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "category", [], "any", false, false, false, 4));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                echo "  
          <li><a href=\"";
                // line 5
                echo twig_get_attribute($this->env, $this->source, $context["category"], "url", [], "any", false, false, false, 5);
                echo "\" rel=\"category\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 5);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "\t</ul>
\t";
        }
        // line 9
        echo "\t
\t";
        // line 10
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "tags", [], "any", false, false, false, 10), 0, [], "any", false, false, false, 10)) {
            // line 11
            echo "\t<ul class=\"post-tags\">
        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "tags", [], "any", false, false, false, 12));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 13
                echo "           <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "url", [], "any", false, false, false, 13);
                echo "\" rel=\"tag\">";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 13);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "\t</ul>
\t";
        }
        // line 17
        echo "\t
\t";
        // line 18
        if ((0 !== twig_compare(($context["pageName"] ?? null), "blog"))) {
            // line 19
            echo "\t<div class=\"read-more\">
\t\t<a href=\"";
            // line 20
            echo twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "siteURL", [], "any", false, false, false, 20);
            echo "\">阅读全文<i class=\"fa fa-angle-double-right \"></i></a>
\t</div>
\t";
        }
        // line 23
        echo "</footer><!-- .entry-footer -->";
    }

    public function getTemplateName()
    {
        return "blog/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 23,  100 => 20,  97 => 19,  95 => 18,  92 => 17,  88 => 15,  77 => 13,  73 => 12,  70 => 11,  68 => 10,  65 => 9,  61 => 7,  51 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"entry-footer\">
\t{% if attribute(blog.category, 0) %}
\t<ul class=\"post-categories\">
        {% for category in blog.category %}  
          <li><a href=\"{{ category.url }}\" rel=\"category\">{{ category.name }}</a></li>
        {% endfor %}
\t</ul>
\t{% endif %}
\t
\t{% if attribute(blog.tags, 0) %}
\t<ul class=\"post-tags\">
        {% for tag in blog.tags %}
           <li><a href=\"{{ tag.url }}\" rel=\"tag\">{{ tag.name }}</a></li>
        {% endfor %}
\t</ul>
\t{% endif %}
\t
\t{% if pageName != \"blog\" %}
\t<div class=\"read-more\">
\t\t<a href=\"{{ blog.siteURL }}\">阅读全文<i class=\"fa fa-angle-double-right \"></i></a>
\t</div>
\t{% endif %}
</footer><!-- .entry-footer -->", "blog/footer.twig", "/var/www/html/blog-with-ci/public/theme/quest/blog/footer.twig");
    }
}
