<?php

/* picked.html */
class __TwigTemplate_79ca4e897bfb018e718b36b72ec1bc17761b0802a07c1a82ee9737c4555fdba8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->loadTemplate("index.html", "picked.html", 1)->display($context);
        // line 2
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"container\">
    ";
        // line 4
        if (($context["meal"] ?? null)) {
            // line 5
            echo "    <center><h3>Wylosowano:</h3><br>
<h1><b>";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["meal"] ?? null), "name", array()), "html", null, true);
            echo "</b></h1></center>
       ";
        } else {
            // line 8
            echo "    <p>Nie ma obiadów :< </p>
    ";
        }
        // line 10
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "picked.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 10,  41 => 8,  36 => 6,  33 => 5,  31 => 4,  28 => 3,  22 => 2,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "picked.html", "/home/html/obiad/templates/picked.html");
    }
}
