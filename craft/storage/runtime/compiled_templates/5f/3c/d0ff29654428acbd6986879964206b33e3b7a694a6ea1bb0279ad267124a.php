<?php

/* _components/fieldtypes/Assets/input */
class __TwigTemplate_5f3cd0ff29654428acbd6986879964206b33e3b7a694a6ea1bb0279ad267124a extends Craft\BaseTemplate
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
        if ((array_key_exists("name", $context) && (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))) {
            // line 2
            echo "\t<input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "\" value=\"\">
";
        }
        // line 5
        $context["elements"] = ((array_key_exists("elements", $context)) ? ((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements"))) : (array()));
        // line 6
        $context["jsClass"] = (((array_key_exists("jsClass", $context) && (isset($context["jsClass"]) ? $context["jsClass"] : $this->getContext($context, "jsClass")))) ? ((isset($context["jsClass"]) ? $context["jsClass"] : $this->getContext($context, "jsClass"))) : ("Craft.BaseElementSelectInput"));
        // line 7
        $context["sources"] = (((array_key_exists("sources", $context) && (isset($context["sources"]) ? $context["sources"] : $this->getContext($context, "sources")))) ? ((isset($context["sources"]) ? $context["sources"] : $this->getContext($context, "sources"))) : (null));
        // line 8
        $context["criteria"] = (((array_key_exists("criteria", $context) && (isset($context["criteria"]) ? $context["criteria"] : $this->getContext($context, "criteria")))) ? ((isset($context["criteria"]) ? $context["criteria"] : $this->getContext($context, "criteria"))) : (null));
        // line 9
        $context["storageKey"] = (((array_key_exists("storageKey", $context) && (isset($context["storageKey"]) ? $context["storageKey"] : $this->getContext($context, "storageKey")))) ? ((isset($context["storageKey"]) ? $context["storageKey"] : $this->getContext($context, "storageKey"))) : (null));
        // line 11
        echo "<div id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"elementselect\">
\t<div class=\"elements\">
\t\t";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 14
            echo "\t\t\t";
            $this->env->loadTemplate("_elements/element")->display(array_merge($context, array("context" => "field")));
            // line 15
            echo "\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t</div>

\t<div class=\"btn add icon dashed\">";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["addButtonLabel"]) ? $context["addButtonLabel"] : $this->getContext($context, "addButtonLabel")), "html", null, true);
        echo "</div>
</div>

";
        // line 21
        ob_start();
        // line 22
        echo "\tnew ";
        echo twig_escape_filter($this->env, (isset($context["jsClass"]) ? $context["jsClass"] : $this->getContext($context, "jsClass")), "html", null, true);
        echo "(
\t\t\"";
        // line 23
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\craft()->templates->namespaceInputId((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))), "js"), "html", null, true);
        echo "\",
\t\t\"";
        // line 24
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\craft()->templates->namespaceInputName((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "js"), "html", null, true);
        echo "\",
\t\t\"";
        // line 25
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute((isset($context["elementType"]) ? $context["elementType"] : $this->getContext($context, "elementType")), "getClassHandle", array(), "method"), "js"), "html", null, true);
        echo "\",
\t\t";
        // line 26
        echo twig_jsonencode_filter((isset($context["sources"]) ? $context["sources"] : $this->getContext($context, "sources")));
        echo ",
\t\t";
        // line 27
        echo twig_jsonencode_filter((isset($context["criteria"]) ? $context["criteria"] : $this->getContext($context, "criteria")));
        echo ",
\t\t";
        // line 28
        echo twig_escape_filter($this->env, (((isset($context["sourceElementId"]) ? $context["sourceElementId"] : $this->getContext($context, "sourceElementId"))) ? ((isset($context["sourceElementId"]) ? $context["sourceElementId"] : $this->getContext($context, "sourceElementId"))) : ("null")), "html", null, true);
        echo ",
\t\t";
        // line 29
        echo twig_escape_filter($this->env, (((isset($context["limit"]) ? $context["limit"] : $this->getContext($context, "limit"))) ? ((isset($context["limit"]) ? $context["limit"] : $this->getContext($context, "limit"))) : ("null")), "html", null, true);
        echo ",
\t\t\"";
        // line 30
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["storageKey"]) ? $context["storageKey"] : $this->getContext($context, "storageKey")), "js"), "html", null, true);
        echo "\",
\t\t";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["fieldId"]) ? $context["fieldId"] : $this->getContext($context, "fieldId")), "html", null, true);
        echo "
\t);
";
        $context["js"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 34
        echo "
";
        // line 35
        \Craft\craft()->templates->includeJs((isset($context["js"]) ? $context["js"] : $this->getContext($context, "js")));
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/Assets/input";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 35,  132 => 34,  126 => 31,  122 => 30,  118 => 29,  114 => 28,  110 => 27,  106 => 26,  102 => 25,  98 => 24,  89 => 22,  87 => 21,  81 => 18,  77 => 16,  63 => 15,  60 => 14,  33 => 8,  31 => 7,  64 => 6,  59 => 5,  45 => 11,  42 => 6,  37 => 11,  30 => 4,  23 => 2,  26 => 11,  24 => 3,  72 => 14,  55 => 8,  46 => 7,  21 => 2,  19 => 1,  427 => 196,  422 => 193,  419 => 192,  416 => 191,  411 => 189,  407 => 188,  404 => 187,  401 => 186,  398 => 185,  390 => 183,  388 => 182,  382 => 178,  369 => 176,  367 => 175,  364 => 174,  361 => 173,  358 => 172,  355 => 171,  352 => 170,  349 => 169,  346 => 168,  344 => 167,  337 => 165,  329 => 160,  323 => 157,  320 => 156,  318 => 155,  315 => 154,  311 => 152,  306 => 150,  302 => 149,  297 => 148,  295 => 147,  292 => 146,  284 => 144,  282 => 143,  277 => 141,  273 => 140,  267 => 139,  263 => 137,  261 => 136,  257 => 134,  255 => 133,  251 => 131,  248 => 130,  241 => 126,  237 => 125,  234 => 124,  232 => 123,  228 => 121,  224 => 119,  221 => 115,  219 => 114,  215 => 112,  213 => 106,  209 => 104,  207 => 98,  204 => 97,  200 => 95,  197 => 89,  195 => 88,  192 => 87,  188 => 85,  185 => 79,  183 => 78,  179 => 76,  177 => 69,  174 => 68,  170 => 66,  167 => 60,  165 => 59,  161 => 57,  159 => 56,  156 => 55,  152 => 53,  145 => 51,  141 => 49,  134 => 48,  131 => 43,  127 => 42,  125 => 41,  119 => 40,  116 => 39,  112 => 38,  109 => 37,  107 => 36,  104 => 35,  97 => 31,  94 => 23,  92 => 29,  85 => 24,  82 => 23,  80 => 22,  74 => 18,  67 => 11,  61 => 16,  57 => 12,  52 => 14,  49 => 13,  43 => 13,  41 => 201,  39 => 10,  35 => 9,  32 => 6,  29 => 6,  27 => 5,  25 => 4,);
    }
}
