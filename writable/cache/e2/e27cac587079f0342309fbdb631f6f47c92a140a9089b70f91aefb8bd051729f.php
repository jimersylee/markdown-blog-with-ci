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

/* detail.twig */
class __TwigTemplate_b2fafe7075465b8e1c5f7be0bca6d4472bb2f928599e501f51b4881b8337ada7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'keywords' => [$this, 'block_keywords'],
            'description' => [$this, 'block_description'],
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
        $this->parent = $this->loadTemplate("block/base.twig", "detail.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "title", [], "any", false, false, false, 3);
        echo "|";
        echo twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 3);
    }

    // line 5
    public function block_keywords($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "keywords", [], "any", false, false, false, 5);
        echo ",";
        echo twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 5);
    }

    // line 7
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_slice($this->env, strip_tags(twig_replace_filter(twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "summary", [], "any", false, false, false, 7), ["
" => ""])), 0, 140);
    }

    // line 9
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        $this->loadTemplate("block/header.twig", "detail.twig", 10)->display($context);
    }

    // line 13
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    ";
        $this->loadTemplate("block/content.twig", "detail.twig", 14)->display($context);
    }

    // line 18
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    ";
        $this->loadTemplate("block/footer.twig", "detail.twig", 19)->display($context);
    }

    public function getTemplateName()
    {
        return "detail.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 19,  95 => 18,  90 => 14,  86 => 13,  81 => 10,  77 => 9,  69 => 7,  60 => 5,  51 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"block/base.twig\" %}

{% block title %}{{ blog.title }}|{{ site.title }}{% endblock %}

{% block keywords %}{{ blog.keywords }},{{ site.title }}{% endblock %}

{% block description %}{{ blog.summary | replace({'\\n': ''}) | striptags | slice(0, 140) }}{% endblock %}

{% block header %}
    {% include \"block/header.twig\" %}
{% endblock %}

{% block content %}
    {% include \"block/content.twig\" %}
{% endblock %}


{% block footer %}
    {% include \"block/footer.twig\" %}
{% endblock %}
", "detail.twig", "/var/www/html/blog-with-ci/public/theme/quest/detail.twig");
    }
}
