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

/* block/base.twig */
class __TwigTemplate_229ad5604e81b81a6a6039f18fa0e58148b3cf4a0911bdc53cbff2fe4616721f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'keywords' => [$this, 'block_keywords'],
            'description' => [$this, 'block_description'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"zh-CN\">
";
        // line 3
        $this->displayBlock('head', $context, $blocks);
        // line 29
        echo "</head>

<body class=\"home blog wide\">
\t<div id=\"page\" class=\"hfeed site\">
\t\t<a class=\"skip-link screen-reader-text\" href=\"#content\">Skip to content</a>
\t\t";
        // line 34
        $this->displayBlock('header', $context, $blocks);
        // line 35
        echo "\t\t";
        $this->displayBlock('content', $context, $blocks);
        // line 36
        echo "\t\t";
        $this->displayBlock('footer', $context, $blocks);
        // line 37
        echo "\t</div><!-- #page -->
\t<a href=\"#0\" class=\"cd-top\"><i class=\"fa fa-angle-up\"></i></a>

<script type=\"text/javascript\" src=\"";
        // line 40
        echo twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "url", [], "any", false, false, false, 40);
        echo "theme/quest/assets/plugins/modernizr/modernizr.custom.js?ver=";
        echo twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "version", [], "any", false, false, false, 40);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 41
        echo twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "url", [], "any", false, false, false, 41);
        echo "theme/quest/js/jquery/jquery.js?ver=1.11.2\"></script>
<script type=\"text/javascript\" src=\"";
        // line 42
        echo twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "url", [], "any", false, false, false, 42);
        echo "theme/quest/js/jquery/jquery-migrate.min.js?ver=1.2.1\"></script>
<script type=\"text/javascript\" src=\"";
        // line 43
        echo twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "url", [], "any", false, false, false, 43);
        echo "theme/quest/assets/plugins/bootstrap/js/bootstrap.min.js?ver=";
        echo twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "version", [], "any", false, false, false, 43);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 44
        echo twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "url", [], "any", false, false, false, 44);
        echo "theme/quest/assets/plugins/wow/wow.js?ver=";
        echo twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "version", [], "any", false, false, false, 44);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 45
        echo twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "url", [], "any", false, false, false, 45);
        echo "theme/quest/assets/plugins/colorbox/jquery.colorbox-min.js?ver=";
        echo twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "version", [], "any", false, false, false, 45);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 46
        echo twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "url", [], "any", false, false, false, 46);
        echo "theme/quest/assets/js/quest.js?ver=";
        echo twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "version", [], "any", false, false, false, 46);
        echo "\"></script>
\t
";
        // line 48
        if (twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "highlight", [], "any", false, false, false, 48)) {
            // line 49
            echo "<link rel=\"stylesheet\" href=\"//cdn.bootcss.com/highlight.js/8.6/styles/default.min.css\">
<script src=\"//cdn.bootcss.com/highlight.js/8.6/highlight.min.js\"></script>
<script>hljs.initHighlightingOnLoad();</script>
";
        }
        // line 53
        echo "
";
        // line 54
        if (twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "katex", [], "any", false, false, false, 54)) {
            // line 55
            echo "<link rel=\"stylesheet\" href=\"//cdn.bootcss.com/KaTeX/0.6.0/katex.min.css\">
<script src=\"//cdn.bootcss.com/KaTeX/0.6.0/katex.min.js\"></script>
<script src=\"//cdn.bootcss.com/KaTeX/0.6.0/contrib/auto-render.min.js\"></script>
<script type=\"text/javascript\">
render_option = {
\tdelimiters: [
\t\t// 段落模式 \$\$...\$\$ \\[...\\]
\t\t{left: \"\$\$\", right: \"\$\$\", display: true},
\t\t{left: \"\\\\[\", right: \"\\\\]\", display: true},
\t\t// 行内模式 \$...\$ \\(...\\)
\t\t{left: \"\$\", right: \"\$\", display: false},
\t\t{left: \"\\\\(\", right: \"\\\\)\", display: false}
\t],
\tignoredTags: [\"script\", \"noscript\", \"style\", \"textarea\", \"pre\", \"code\"]
}
renderMathInElement(document.body, render_option);
</script>
";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 72
($context["site"] ?? null), "mathjax", [], "any", false, false, false, 72)) {
            // line 73
            echo "<script type=\"text/x-mathjax-config\">MathJax.Hub.Config({tex2jax: {inlineMath: [['\$','\$'], ['\\\\(','\\\\)']]}});</script>
<script type=\"text/javascript\" src=\"//cdn.bootcss.com/mathjax/2.5.3/MathJax.js?config=TeX-AMS-MML_HTMLorMML\"></script>
";
        }
        // line 76
        echo "
</body>
</html>
";
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<head>
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t<meta name=\"keywords\" content=\"";
        // line 8
        $this->displayBlock('keywords', $context, $blocks);
        echo "\">
\t<meta name=\"description\" content=\"";
        // line 9
        $this->displayBlock('description', $context, $blocks);
        echo "\">
\t
\t<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "url", [], "any", false, false, false, 11);
        echo "theme/quest/assets/plugins/bootstrap/css/bootstrap.min.css?ver=";
        echo twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "version", [], "any", false, false, false, 11);
        echo "\" type=\"text/css\" media=\"all\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "url", [], "any", false, false, false, 12);
        echo "theme/quest/assets/plugins/font-awesome/css/font-awesome.min.css?ver=";
        echo twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "version", [], "any", false, false, false, 12);
        echo "\" type=\"text/css\" media=\"all\" />
\t<link rel=\"stylesheet\" href=\"//fonts.googleapis.com/css?family=Open+Sans:300,400,600&subset=latin,latin-ext\">
\t<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "url", [], "any", false, false, false, 14);
        echo "theme/quest/css/style.css?ver=";
        echo twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "version", [], "any", false, false, false, 14);
        echo "\" type=\"text/css\" media=\"all\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "url", [], "any", false, false, false, 15);
        echo "theme/quest/css/customizer.css?ver=";
        echo twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "version", [], "any", false, false, false, 15);
        echo "\" type=\"text/css\" media=\"all\" />
\t<link rel=\"alternate\" type=\"application/rss+xml\" title=\"";
        // line 16
        echo twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 16);
        echo "\" href=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "url", [], "any", false, false, false, 16);
        echo "feed.xml\" />
\t
\t";
        // line 18
        if (twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "baiduAnalytics", [], "any", false, false, false, 18)) {
            echo "<script>
\tvar _hmt = _hmt || [];
\t(function() {
\t  var hm = document.createElement(\"script\");
\t  hm.src = \"//hm.baidu.com/hm.js?";
            // line 22
            echo twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "baiduAnalytics", [], "any", false, false, false, 22);
            echo "\";
\t  var s = document.getElementsByTagName(\"script\")[0]; 
\t  s.parentNode.insertBefore(hm, s);
\t})();
\t</script>
\t";
        }
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 7);
    }

    // line 8
    public function block_keywords($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "keywords", [], "any", false, false, false, 8);
        echo ",";
        echo twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 8);
    }

    // line 9
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "description", [], "any", false, false, false, 9);
    }

    // line 34
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 35
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 36
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    public function getTemplateName()
    {
        return "block/base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 36,  257 => 35,  250 => 34,  243 => 9,  234 => 8,  227 => 7,  216 => 22,  209 => 18,  202 => 16,  196 => 15,  190 => 14,  183 => 12,  177 => 11,  172 => 9,  168 => 8,  164 => 7,  159 => 4,  155 => 3,  148 => 76,  143 => 73,  141 => 72,  122 => 55,  120 => 54,  117 => 53,  111 => 49,  109 => 48,  102 => 46,  96 => 45,  90 => 44,  84 => 43,  80 => 42,  76 => 41,  70 => 40,  65 => 37,  62 => 36,  59 => 35,  57 => 34,  50 => 29,  48 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"zh-CN\">
{% block head %}
<head>
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<title>{% block title %}{{ site.title }}{% endblock %}</title>
\t<meta name=\"keywords\" content=\"{% block keywords %}{{ site.keywords }},{{ site.title }}{% endblock %}\">
\t<meta name=\"description\" content=\"{% block description %}{{ site.description }}{% endblock %}\">
\t
\t<link rel=\"stylesheet\" href=\"{{ site.url }}theme/quest/assets/plugins/bootstrap/css/bootstrap.min.css?ver={{ site.version }}\" type=\"text/css\" media=\"all\" />
\t<link rel=\"stylesheet\" href=\"{{ site.url }}theme/quest/assets/plugins/font-awesome/css/font-awesome.min.css?ver={{ site.version }}\" type=\"text/css\" media=\"all\" />
\t<link rel=\"stylesheet\" href=\"//fonts.googleapis.com/css?family=Open+Sans:300,400,600&subset=latin,latin-ext\">
\t<link rel=\"stylesheet\" href=\"{{ site.url }}theme/quest/css/style.css?ver={{ site.version }}\" type=\"text/css\" media=\"all\" />
\t<link rel=\"stylesheet\" href=\"{{ site.url }}theme/quest/css/customizer.css?ver={{ site.version }}\" type=\"text/css\" media=\"all\" />
\t<link rel=\"alternate\" type=\"application/rss+xml\" title=\"{{ site.title }}\" href=\"{{ site.url }}feed.xml\" />
\t
\t{% if site.baiduAnalytics %}<script>
\tvar _hmt = _hmt || [];
\t(function() {
\t  var hm = document.createElement(\"script\");
\t  hm.src = \"//hm.baidu.com/hm.js?{{ site.baiduAnalytics }}\";
\t  var s = document.getElementsByTagName(\"script\")[0]; 
\t  s.parentNode.insertBefore(hm, s);
\t})();
\t</script>
\t{% endif %}
{% endblock %}
</head>

<body class=\"home blog wide\">
\t<div id=\"page\" class=\"hfeed site\">
\t\t<a class=\"skip-link screen-reader-text\" href=\"#content\">Skip to content</a>
\t\t{% block header %} {% endblock %}
\t\t{% block content %} {% endblock %}
\t\t{% block footer %} {% endblock %}
\t</div><!-- #page -->
\t<a href=\"#0\" class=\"cd-top\"><i class=\"fa fa-angle-up\"></i></a>

<script type=\"text/javascript\" src=\"{{ site.url }}theme/quest/assets/plugins/modernizr/modernizr.custom.js?ver={{ site.version }}\"></script>
<script type=\"text/javascript\" src=\"{{ site.url }}theme/quest/js/jquery/jquery.js?ver=1.11.2\"></script>
<script type=\"text/javascript\" src=\"{{ site.url }}theme/quest/js/jquery/jquery-migrate.min.js?ver=1.2.1\"></script>
<script type=\"text/javascript\" src=\"{{ site.url }}theme/quest/assets/plugins/bootstrap/js/bootstrap.min.js?ver={{ site.version }}\"></script>
<script type=\"text/javascript\" src=\"{{ site.url }}theme/quest/assets/plugins/wow/wow.js?ver={{ site.version }}\"></script>
<script type=\"text/javascript\" src=\"{{ site.url }}theme/quest/assets/plugins/colorbox/jquery.colorbox-min.js?ver={{ site.version }}\"></script>
<script type=\"text/javascript\" src=\"{{ site.url }}theme/quest/assets/js/quest.js?ver={{ site.version }}\"></script>
\t
{% if site.highlight %}
<link rel=\"stylesheet\" href=\"//cdn.bootcss.com/highlight.js/8.6/styles/default.min.css\">
<script src=\"//cdn.bootcss.com/highlight.js/8.6/highlight.min.js\"></script>
<script>hljs.initHighlightingOnLoad();</script>
{% endif %}

{% if site.katex %}
<link rel=\"stylesheet\" href=\"//cdn.bootcss.com/KaTeX/0.6.0/katex.min.css\">
<script src=\"//cdn.bootcss.com/KaTeX/0.6.0/katex.min.js\"></script>
<script src=\"//cdn.bootcss.com/KaTeX/0.6.0/contrib/auto-render.min.js\"></script>
<script type=\"text/javascript\">
render_option = {
\tdelimiters: [
\t\t// 段落模式 \$\$...\$\$ \\[...\\]
\t\t{left: \"\$\$\", right: \"\$\$\", display: true},
\t\t{left: \"\\\\[\", right: \"\\\\]\", display: true},
\t\t// 行内模式 \$...\$ \\(...\\)
\t\t{left: \"\$\", right: \"\$\", display: false},
\t\t{left: \"\\\\(\", right: \"\\\\)\", display: false}
\t],
\tignoredTags: [\"script\", \"noscript\", \"style\", \"textarea\", \"pre\", \"code\"]
}
renderMathInElement(document.body, render_option);
</script>
{% elseif site.mathjax %}
<script type=\"text/x-mathjax-config\">MathJax.Hub.Config({tex2jax: {inlineMath: [['\$','\$'], ['\\\\(','\\\\)']]}});</script>
<script type=\"text/javascript\" src=\"//cdn.bootcss.com/mathjax/2.5.3/MathJax.js?config=TeX-AMS-MML_HTMLorMML\"></script>
{% endif %}

</body>
</html>
", "block/base.twig", "/var/www/html/blog-with-ci/public/theme/quest/block/base.twig");
    }
}
