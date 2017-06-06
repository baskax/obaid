<?php

/* add.html */
class __TwigTemplate_ca6bfc02ed661d448b666cf8be6b38178e4846612547103c80ede2ab4a9e555b extends Twig_Template
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
        $this->loadTemplate("index.html", "add.html", 1)->display($context);
        // line 2
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"container\">
    <div class=\"row\"><h1>Dodaj nowy posiłek</h1></div>
    <form class=\"form-horizontal\" method=\"POST\" action=\"/add\">
        <fieldset>
            <legend>Dodaj nowy posiłek</legend>
            <div class=\"form-group\">
                <label class=\"col-md-2 control-label\" for=\"name\">Nazwa</label>
                <div class=\"col-md-4\">
                    <input id=\"name\" name=\"name\" type=\"text\" placeholder=\"\" class=\"form-control input-md\" required=\"\">

                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-2 control-label\" for=\"lng\">Zapisz</label>
                <div class=\"col-md-4\">
                    <button type=\"submit\" class=\"btn btn-success\">Zapisz</button>
                </div>
            </div>
        </fieldset>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "add.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 2,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "add.html", "/home/html/obiad/templates/add.html");
    }
}
