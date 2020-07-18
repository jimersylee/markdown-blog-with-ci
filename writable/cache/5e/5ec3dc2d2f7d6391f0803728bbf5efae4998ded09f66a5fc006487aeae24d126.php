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

/* index.twig */
class __TwigTemplate_3ba94b4c55af159e1cf8b9c8e8d82c486b8761e7b9728736759a2270a2c1d489 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'keywords' => [$this, 'block_keywords'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "block/base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("block/base.twig", "index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_keywords($context, array $blocks = [])
    {
        $macros = $this->macros;
        if (($context["tag"] ?? null)) {
            echo twig_get_attribute($this->env, $this->source, ($context["tag"] ?? null), "name", [], "any", false, false, false, 3);
            echo ",";
        }
        if (($context["category"] ?? null)) {
            echo twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 3);
            echo ",";
        }
        $this->displayParentBlock("keywords", $context, $blocks);
    }

    // line 5
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        $this->loadTemplate("block/header.twig", "index.twig", 6)->display($context);
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        $this->loadTemplate("block/homeContent.twig", "index.twig", 10)->display($context);
    }

    // line 14
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "    ";
        $this->loadTemplate("block/footer.twig", "index.twig", 15)->display($context);
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 15,  82 => 14,  77 => 10,  73 => 9,  68 => 6,  64 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"block/base.twig\" %}

{% block keywords %}{% if tag %}{{ tag.name }},{% endif %}{% if category %}{{ category.name }},{% endif %}{{ parent() }}{% endblock %}

{% block header %}
    {% include \"block/header.twig\" %}
{% endblock %}

{% block content %}
    {% include \"block/homeContent.twig\" %}
{% endblock %}


{% block footer %}
    {% include \"block/footer.twig\" %}
{% endblock %}

", "index.twig", "/var/www/html/blog-with-ci/public/theme/quest/index.twig");
    }
}
