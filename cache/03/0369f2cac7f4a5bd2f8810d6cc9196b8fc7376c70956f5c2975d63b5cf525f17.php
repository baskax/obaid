<?php

/* list.html */
class __TwigTemplate_0b376b2b32978239c37081ef905a7e285e76cf025e889f103455f3abaf18159d extends Twig_Template
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
        $this->loadTemplate("index.html", "list.html", 1)->display($context);
        // line 2
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"container\">
    <div class=\"row\"><h1>Lista obiadów</h1></div>
    ";
        // line 5
        if ( !twig_test_empty(($context["meals"] ?? null))) {
            // line 6
            echo "    <table class=\"table table-bordered table-striped table-responsive\">
        <thead>
        <tr>
            <th>
                Nazwa
            </th>
            <th>
                Ostatnio wybrany
            </th>
            <th>
                Status
            </th>
            <th>Usuń</th>
         </tr>
        </thead>
        <tbody>
        ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["meals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["meal"]) {
                // line 23
                echo "        <tr>
            <td>
                ";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "name", array()), "html", null, true);
                echo "
            </td>
            <td>
                ";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "picked_at", array()), "html", null, true);
                echo "
            </td>
            <td>
                <a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("toggle", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "id", array()))), "html", null, true);
                echo " \">";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "status", array()) == 1)) {
                    echo "Aktywny";
                } else {
                    echo "Nieaktywny";
                }
                echo "</a>
            </td>
            <td>
                <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["meal"], "id", array()))), "html", null, true);
                echo "\">Usuń</a>
            </td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meal'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "        </tbody>
    </table>
    ";
        } else {
            // line 41
            echo "    <p>Brak obiadów</p>
    ";
        }
        // line 43
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "list.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 43,  99 => 41,  94 => 38,  84 => 34,  72 => 31,  66 => 28,  60 => 25,  56 => 23,  52 => 22,  34 => 6,  32 => 5,  28 => 3,  22 => 2,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "list.html", "/home/html/obiad/templates/list.html");
    }
}
