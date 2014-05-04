<?php

/* _includes/forms/hidden */
class __TwigTemplate_c186ac83856bab8ab7c4f8f3ff61224f1dcea3db989068bc518ada47ab26c6c1 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<input type=\"hidden\"";
        // line 2
        if (array_key_exists("id", $context)) {
            echo " id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\"";
        }
        // line 3
        if (array_key_exists("name", $context)) {
            echo " name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "\"";
        }
        // line 4
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        echo ">
";
    }

    public function getTemplateName()
    {
        return "_includes/forms/hidden";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  21 => 2,  126 => 109,  123 => 108,  114 => 102,  112 => 98,  106 => 94,  104 => 89,  99 => 86,  97 => 81,  92 => 78,  90 => 77,  84 => 65,  80 => 63,  74 => 51,  69 => 47,  58 => 39,  46 => 26,  44 => 25,  40 => 23,  38 => 15,  34 => 13,  32 => 5,  29 => 4,  27 => 3,  19 => 1,  191 => 73,  184 => 68,  182 => 63,  177 => 60,  174 => 59,  155 => 57,  147 => 56,  144 => 55,  137 => 53,  133 => 52,  127 => 50,  121 => 105,  118 => 104,  108 => 52,  102 => 50,  96 => 48,  93 => 47,  86 => 75,  78 => 53,  75 => 44,  72 => 48,  68 => 42,  64 => 40,  62 => 32,  59 => 31,  57 => 30,  53 => 36,  51 => 29,  47 => 25,  45 => 15,  41 => 13,  35 => 12,  30 => 9,  28 => 8,  26 => 5,  24 => 2,);
    }
}
