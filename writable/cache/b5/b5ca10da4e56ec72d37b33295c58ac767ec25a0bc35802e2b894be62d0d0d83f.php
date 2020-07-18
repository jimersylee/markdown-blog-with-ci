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

/* block/nav.twig */
class __TwigTemplate_2b96a1259802d37e087495c80223b7cb46cf714bcce1d74fcfd484858f620e13 extends Template
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
        if ((1 === twig_compare(($context["pages"] ?? null), 1))) {
            // line 2
            echo "<div class=\"center\">
\t<ul class=\"pagination\">
\t";
            // line 4
            if (twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "prev", [], "any", false, false, false, 4)) {
                // line 5
                echo "\t<li><a class=\"prev page-numbers\" href=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "prev", [], "any", false, false, false, 5), "url", [], "any", false, false, false, 5);
                echo "\"><i class=\"fa fa-angle-double-left\"></i></a></li>
\t";
            }
            // line 7
            echo "\t
\t";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "showList", [], "any", false, false, false, 8));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 9
                echo "\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["page"], "isCurrent", [], "any", false, false, false, 9)) {
                    // line 10
                    echo "\t\t<li><span class=\"page-numbers current\">";
                    echo ($context["pageNo"] ?? null);
                    echo "</span></li>
\t\t";
                } else {
                    // line 12
                    echo "\t\t<li><a class=\"page-numbers\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["page"], "url", [], "any", false, false, false, 12);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["page"], "num", [], "any", false, false, false, 12);
                    echo "</a></li>
    \t";
                }
                // line 14
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "        
\t";
            // line 16
            if (twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "next", [], "any", false, false, false, 16)) {
                // line 17
                echo "\t<li><a class=\"next page-numbers\" href=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "next", [], "any", false, false, false, 17), "url", [], "any", false, false, false, 17);
                echo "\"><i class=\"fa fa-angle-double-right\"></i></a></li>
\t";
            }
            // line 19
            echo "\t</ul>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "block/nav.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 19,  86 => 17,  84 => 16,  81 => 15,  75 => 14,  67 => 12,  61 => 10,  58 => 9,  54 => 8,  51 => 7,  45 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if pages > 1 %}
<div class=\"center\">
\t<ul class=\"pagination\">
\t{% if pagination.prev %}
\t<li><a class=\"prev page-numbers\" href=\"{{ pagination.prev.url }}\"><i class=\"fa fa-angle-double-left\"></i></a></li>
\t{% endif %}
\t
\t{% for page in pagination.showList %}
\t\t{% if page.isCurrent %}
\t\t<li><span class=\"page-numbers current\">{{ pageNo }}</span></li>
\t\t{% else %}
\t\t<li><a class=\"page-numbers\" href=\"{{ page.url }}\">{{ page.num }}</a></li>
    \t{% endif %}
    {% endfor %}
        
\t{% if pagination.next %}
\t<li><a class=\"next page-numbers\" href=\"{{ pagination.next.url }}\"><i class=\"fa fa-angle-double-right\"></i></a></li>
\t{% endif %}
\t</ul>
</div>
{% endif %}", "block/nav.twig", "/var/www/html/blog-with-ci/public/theme/quest/block/nav.twig");
    }
}
