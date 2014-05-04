<?php

/* _components/fieldtypes/PlainText/input */
class __TwigTemplate_9b467cc42ab539e7b87dd32fff0870f6ef4c930d0c9690751304c0adc012b120 extends Craft\BaseTemplate
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
        $context["forms"] = $this->env->loadTemplate("_includes/forms");
        // line 2
        echo "
";
        // line 3
        $context["config"] = array("id" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "value" => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "class" => "nicetext", "placeholder" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "placeholder"), "rows" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "initialRows"));
        // line 11
        echo "
";
        // line 12
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "multiline")) {
            // line 13
            echo "\t";
            echo $context["forms"]->gettextarea((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")));
            echo "
";
        } else {
            // line 15
            echo "\t";
            echo $context["forms"]->gettext((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/PlainText/input";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 13,  64 => 6,  59 => 5,  45 => 11,  42 => 6,  37 => 15,  30 => 4,  23 => 2,  26 => 11,  24 => 3,  72 => 14,  55 => 8,  46 => 7,  21 => 2,  19 => 1,  427 => 196,  422 => 193,  419 => 192,  416 => 191,  411 => 189,  407 => 188,  404 => 187,  401 => 186,  398 => 185,  390 => 183,  388 => 182,  382 => 178,  369 => 176,  367 => 175,  364 => 174,  361 => 173,  358 => 172,  355 => 171,  352 => 170,  349 => 169,  346 => 168,  344 => 167,  337 => 165,  329 => 160,  323 => 157,  320 => 156,  318 => 155,  315 => 154,  311 => 152,  306 => 150,  302 => 149,  297 => 148,  295 => 147,  292 => 146,  284 => 144,  282 => 143,  277 => 141,  273 => 140,  267 => 139,  263 => 137,  261 => 136,  257 => 134,  255 => 133,  251 => 131,  248 => 130,  241 => 126,  237 => 125,  234 => 124,  232 => 123,  228 => 121,  224 => 119,  221 => 115,  219 => 114,  215 => 112,  213 => 106,  209 => 104,  207 => 98,  204 => 97,  200 => 95,  197 => 89,  195 => 88,  192 => 87,  188 => 85,  185 => 79,  183 => 78,  179 => 76,  177 => 69,  174 => 68,  170 => 66,  167 => 60,  165 => 59,  161 => 57,  159 => 56,  156 => 55,  152 => 53,  145 => 51,  141 => 49,  134 => 48,  131 => 43,  127 => 42,  125 => 41,  119 => 40,  116 => 39,  112 => 38,  109 => 37,  107 => 36,  104 => 35,  97 => 31,  94 => 30,  92 => 29,  85 => 24,  82 => 23,  80 => 22,  74 => 18,  67 => 11,  61 => 16,  57 => 12,  52 => 14,  49 => 13,  43 => 202,  41 => 201,  39 => 10,  35 => 7,  32 => 6,  29 => 12,  27 => 3,  25 => 4,);
    }
}
