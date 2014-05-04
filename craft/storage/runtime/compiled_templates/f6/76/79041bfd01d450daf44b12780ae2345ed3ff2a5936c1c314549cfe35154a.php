<?php

/* _includes/forms/time */
class __TwigTemplate_f67679041bfd01d450daf44b12780ae2345ed3ff2a5936c1c314549cfe35154a extends Craft\BaseTemplate
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
        if ((!array_key_exists("value", $context))) {
            // line 2
            $context["value"] = null;
        }
        // line 5
        $context["id"] = ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "-time");
        // line 7
        if ((array_key_exists("name", $context) && (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))) {
            // line 8
            $context["name"] = ((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) . "[time]");
        }
        // line 11
        \Craft\craft()->templates->includeJsResource((("lib/jquery.timepicker/jquery.timepicker" . (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "config"), "useCompressedJs")) ? (".min") : (""))) . ".js"));
        // line 13
        if ((!array_key_exists("value", $context))) {
            // line 14
            $context["value"] = null;
        }
        // line 17
        echo "<div class=\"timewrapper\">";
        // line 18
        $this->env->loadTemplate("_includes/forms/text")->display(array_merge($context, array("autocomplete" => false, "size" => 10, "value" => (((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) ? ($this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "localeTime", array(), "method")) : ("")))));
        // line 19
        echo "</div>";
        // line 21
        $context["localeData"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "i18n"), "getLocaleData", array(), "method");
        // line 23
        ob_start();
        // line 24
        echo "
\tvar \$timePicker = \$('#";
        // line 25
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\craft()->templates->namespaceInputId((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))), "js"), "html", null, true);
        echo "');
\t\$timePicker.timepicker({
\t\ttimeFormat: '";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "i18n"), "timepickerJsFormat"), "html", null, true);
        echo "',
\t\tcloseOnWindowScroll: false,
\t\torientation: '";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["localeData"]) ? $context["localeData"] : $this->getContext($context, "localeData")), "getOrientation", array(), "method"), "html", null, true);
        echo "',
\t\tlang: {
\t\t\tam: '";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["localeData"]) ? $context["localeData"] : $this->getContext($context, "localeData")), "getAMName", array(), "method"), "html", null, true);
        echo "',
\t\t\tAM: '";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["localeData"]) ? $context["localeData"] : $this->getContext($context, "localeData")), "getAMName", array(), "method"), "html", null, true);
        echo "',
\t\t\tpm: '";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["localeData"]) ? $context["localeData"] : $this->getContext($context, "localeData")), "getPMName", array(), "method"), "html", null, true);
        echo "',
\t\t\tPM: '";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["localeData"]) ? $context["localeData"] : $this->getContext($context, "localeData")), "getPMName", array(), "method"), "html", null, true);
        echo "'
\t\t}
\t});";
        $context["js"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 39
        \Craft\craft()->templates->includeJs((isset($context["js"]) ? $context["js"] : $this->getContext($context, "js")));
    }

    public function getTemplateName()
    {
        return "_includes/forms/time";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 39,  78 => 34,  70 => 32,  51 => 25,  44 => 21,  40 => 18,  38 => 17,  71 => 27,  66 => 31,  48 => 24,  28 => 8,  256 => 62,  245 => 60,  235 => 56,  231 => 54,  208 => 52,  191 => 51,  186 => 48,  168 => 40,  162 => 37,  151 => 31,  140 => 29,  136 => 28,  117 => 23,  113 => 22,  103 => 18,  99 => 17,  88 => 15,  68 => 13,  65 => 12,  62 => 22,  56 => 27,  53 => 8,  50 => 7,  135 => 35,  132 => 34,  126 => 31,  122 => 30,  118 => 29,  114 => 28,  110 => 27,  106 => 26,  102 => 25,  98 => 24,  89 => 22,  87 => 21,  81 => 18,  77 => 16,  63 => 15,  60 => 14,  33 => 13,  31 => 11,  64 => 6,  59 => 10,  45 => 11,  42 => 19,  37 => 15,  30 => 5,  23 => 2,  26 => 7,  24 => 5,  72 => 14,  55 => 8,  46 => 23,  21 => 2,  19 => 1,  427 => 196,  422 => 193,  419 => 192,  416 => 191,  411 => 189,  407 => 188,  404 => 187,  401 => 186,  398 => 185,  390 => 183,  388 => 182,  382 => 178,  369 => 176,  367 => 175,  364 => 174,  361 => 173,  358 => 172,  355 => 171,  352 => 170,  349 => 169,  346 => 168,  344 => 167,  337 => 165,  329 => 160,  323 => 157,  320 => 156,  318 => 155,  315 => 154,  311 => 152,  306 => 150,  302 => 149,  297 => 148,  295 => 147,  292 => 146,  284 => 144,  282 => 143,  277 => 141,  273 => 140,  267 => 139,  263 => 137,  261 => 136,  257 => 134,  255 => 133,  251 => 131,  248 => 130,  241 => 59,  237 => 125,  234 => 124,  232 => 123,  228 => 121,  224 => 119,  221 => 115,  219 => 114,  215 => 112,  213 => 106,  209 => 104,  207 => 98,  204 => 97,  200 => 95,  197 => 89,  195 => 88,  192 => 87,  188 => 85,  185 => 79,  183 => 78,  179 => 76,  177 => 69,  174 => 68,  170 => 45,  167 => 60,  165 => 59,  161 => 57,  159 => 56,  156 => 34,  152 => 53,  145 => 51,  141 => 49,  134 => 48,  131 => 43,  127 => 42,  125 => 24,  119 => 40,  116 => 39,  112 => 38,  109 => 21,  107 => 36,  104 => 35,  97 => 31,  94 => 23,  92 => 29,  85 => 24,  82 => 23,  80 => 14,  74 => 33,  67 => 11,  61 => 29,  57 => 12,  52 => 21,  49 => 13,  43 => 13,  41 => 201,  39 => 16,  35 => 14,  32 => 6,  29 => 6,  27 => 5,  25 => 3,);
    }
}
