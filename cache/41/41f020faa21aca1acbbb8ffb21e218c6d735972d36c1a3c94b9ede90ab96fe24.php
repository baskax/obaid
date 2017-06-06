<?php

/* layout.html */
class __TwigTemplate_1311fb77f4f40641db5fa2766e68cd4f369644115cb50a7ad5445257ad398650 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'scripts' => array($this, 'block_scripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Co na obiad</title>
    <script src=\"../../../js/jquery-3.2.1.min.js\"></script>
    <script src=\"../../../js/bootstrap.js\"></script>
    <link rel=\"stylesheet\" href=\"../../../css/bootstrap.css\">
    <link rel=\"stylesheet\" href=\"../../../css/bootstrap-theme.css\">
    <link rel=\"stylesheet\" href=\"../../../css/style.css\">
    ";
        // line 11
        $this->displayBlock('scripts', $context, $blocks);
        // line 12
        echo "</head>
<body>
<nav class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"/\">Co na obiad?</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"/\">Strona główna</a></li>
                <li><a href=\"/add\">Dodaj</a></li>
                <li><a href=\"/list\">Lista</a></li>
                <li><a href=\"/random\">Losuj</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "</body>
</html>
";
    }

    // line 11
    public function block_scripts($context, array $blocks = array())
    {
    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  74 => 36,  69 => 11,  63 => 38,  61 => 36,  35 => 12,  33 => 11,  21 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout.html", "/home/html/obiad/templates/layout.html");
    }
}
