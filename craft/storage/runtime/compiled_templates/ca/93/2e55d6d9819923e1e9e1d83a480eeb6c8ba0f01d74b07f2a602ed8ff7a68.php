<?php

/* _includes/forms/checkbox */
class __TwigTemplate_ca932e55d6d9819923e1e9e1d83a480eeb6c8ba0f01d74b07f2a602ed8ff7a68 extends Craft\BaseTemplate
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
        ob_start();
        // line 2
        $context["class"] = twig_join_filter(array_filter(array(0 => ((array_key_exists("class", $context)) ? ((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class"))) : (null)), 1 => ((((array_key_exists("toggle", $context) && (!twig_test_empty((isset($context["toggle"]) ? $context["toggle"] : $this->getContext($context, "toggle"))))) || (array_key_exists("reverseToggle", $context) && (!twig_test_empty((isset($context["reverseToggle"]) ? $context["reverseToggle"] : $this->getContext($context, "reverseToggle"))))))) ? ("fieldtoggle") : (null)), 2 => "checkbox")), " ");
        // line 7
        echo "
";
        // line 8
        $context["value"] = ((array_key_exists("value", $context)) ? ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) : (1));
        // line 9
        echo "
";
        // line 10
        if ((array_key_exists("name", $context) && ((twig_length_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))) < 3) || (twig_slice($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), (-2)) != "[]")))) {
            // line 11
            echo "\t<input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "\" value=\"\">
";
        }
        // line 13
        echo "
<label>
\t<input type=\"checkbox\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "\"";
        // line 16
        if (array_key_exists("id", $context)) {
            echo " id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\"";
        }
        // line 17
        echo "\t\tclass=\"";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
        echo "\"";
        // line 18
        if (array_key_exists("name", $context)) {
            echo " name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "\"";
        }
        // line 19
        if ((array_key_exists("checked", $context) && (isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked")))) {
            echo " checked";
        }
        // line 20
        if (((array_key_exists("autofocus", $context) && (isset($context["autofocus"]) ? $context["autofocus"] : $this->getContext($context, "autofocus"))) && (!$this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "request"), "isMobileBrowser", array(0 => true), "method")))) {
            echo " autofocus";
        }
        // line 21
        if ((array_key_exists("disabled", $context) && (isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled")))) {
            echo " disabled";
        }
        // line 22
        if (array_key_exists("toggle", $context)) {
            echo " data-target=\"";
            echo twig_escape_filter($this->env, (isset($context["toggle"]) ? $context["toggle"] : $this->getContext($context, "toggle")), "html", null, true);
            echo "\"";
        }
        // line 23
        if (array_key_exists("reverseToggle", $context)) {
            echo " data-reverse-target=\"";
            echo twig_escape_filter($this->env, (isset($context["reverseToggle"]) ? $context["reverseToggle"] : $this->getContext($context, "reverseToggle")), "html", null, true);
            echo "\"";
        }
        echo ">
\t";
        // line 24
        if (array_key_exists("label", $context)) {
            echo (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"));
        }
        // line 25
        echo "</label>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "_includes/forms/checkbox";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 24,  80 => 23,  70 => 21,  66 => 20,  62 => 19,  56 => 18,  26 => 8,  37 => 6,  28 => 9,  24 => 3,  92 => 25,  90 => 22,  74 => 22,  68 => 15,  42 => 8,  40 => 7,  21 => 2,  1014 => 184,  1009 => 183,  998 => 182,  984 => 178,  973 => 177,  959 => 173,  948 => 172,  934 => 168,  923 => 167,  909 => 163,  898 => 162,  886 => 158,  880 => 156,  878 => 155,  874 => 154,  861 => 153,  850 => 152,  836 => 148,  825 => 147,  811 => 143,  800 => 142,  786 => 138,  775 => 137,  761 => 133,  750 => 132,  736 => 128,  725 => 127,  711 => 123,  700 => 122,  686 => 118,  675 => 117,  661 => 113,  650 => 112,  636 => 108,  625 => 107,  613 => 103,  601 => 102,  589 => 95,  578 => 94,  566 => 90,  555 => 89,  543 => 85,  532 => 84,  520 => 80,  509 => 79,  497 => 75,  486 => 74,  474 => 70,  463 => 69,  451 => 65,  440 => 64,  428 => 60,  417 => 59,  405 => 55,  394 => 54,  382 => 50,  371 => 49,  359 => 45,  348 => 44,  336 => 40,  325 => 39,  313 => 35,  302 => 34,  290 => 30,  279 => 29,  267 => 25,  256 => 24,  244 => 20,  233 => 19,  221 => 15,  210 => 14,  199 => 10,  188 => 9,  176 => 2,  159 => 180,  155 => 175,  151 => 170,  147 => 165,  143 => 160,  139 => 150,  135 => 145,  131 => 140,  123 => 130,  115 => 120,  111 => 115,  107 => 110,  103 => 105,  99 => 100,  87 => 87,  75 => 22,  51 => 17,  47 => 10,  39 => 13,  23 => 7,  19 => 1,  230 => 80,  224 => 79,  213 => 77,  209 => 76,  204 => 75,  200 => 74,  193 => 70,  189 => 69,  185 => 68,  181 => 67,  177 => 66,  173 => 65,  169 => 64,  165 => 1,  161 => 62,  157 => 61,  153 => 60,  149 => 59,  137 => 56,  133 => 55,  129 => 54,  125 => 53,  117 => 51,  113 => 50,  109 => 49,  105 => 48,  91 => 92,  86 => 24,  83 => 82,  78 => 19,  73 => 32,  71 => 21,  69 => 29,  67 => 20,  65 => 14,  55 => 47,  52 => 17,  50 => 18,  45 => 9,  41 => 10,  35 => 22,  145 => 58,  141 => 57,  127 => 135,  121 => 52,  119 => 125,  110 => 40,  106 => 39,  101 => 47,  95 => 97,  93 => 33,  89 => 32,  85 => 20,  79 => 23,  76 => 27,  63 => 19,  61 => 25,  59 => 11,  57 => 18,  46 => 16,  43 => 15,  38 => 11,  33 => 11,  31 => 10,  29 => 6,  27 => 6,  25 => 4,);
    }
}
