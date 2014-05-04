<?php

/* _components/fieldtypes/Matrix/input */
class __TwigTemplate_62a8148b5db578c9e9d22409dba842a13d5eac422d839a82c783a2e6aa12e008 extends Craft\BaseTemplate
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
        echo "<input type=\"hidden\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "\" value=\"\">

<div class=\"matrix\" id=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
\t<div class=\"blocks\">
\t\t";
        // line 5
        $context["totalNewBlocks"] = 0;
        // line 6
        echo "\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 7
            echo "\t\t\t";
            $context["blockId"] = $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id");
            // line 8
            echo "\t\t\t";
            if ((!(isset($context["blockId"]) ? $context["blockId"] : $this->getContext($context, "blockId")))) {
                // line 9
                echo "\t\t\t\t";
                $context["totalNewBlocks"] = ((isset($context["totalNewBlocks"]) ? $context["totalNewBlocks"] : $this->getContext($context, "totalNewBlocks")) + 1);
                // line 10
                echo "\t\t\t\t";
                $context["blockId"] = ("new" . (isset($context["totalNewBlocks"]) ? $context["totalNewBlocks"] : $this->getContext($context, "totalNewBlocks")));
                // line 11
                echo "\t\t\t";
            }
            // line 12
            echo "
\t\t\t<div class=\"matrixblock";
            // line 13
            if ((!$this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "enabled"))) {
                echo " disabled";
            }
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, (isset($context["blockId"]) ? $context["blockId"] : $this->getContext($context, "blockId")), "html", null, true);
            echo "\"";
            if ($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "collapsed")) {
                echo " data-collapsed=\"1\"";
            }
            echo ">
\t\t\t\t<input type=\"hidden\" name=\"";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "[";
            echo twig_escape_filter($this->env, (isset($context["blockId"]) ? $context["blockId"] : $this->getContext($context, "blockId")), "html", null, true);
            echo "][type]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "getType", array(), "method"), "html", null, true);
            echo "\">
\t\t\t\t<input type=\"hidden\" name=\"";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "[";
            echo twig_escape_filter($this->env, (isset($context["blockId"]) ? $context["blockId"] : $this->getContext($context, "blockId")), "html", null, true);
            echo "][enabled]\" value=\"";
            if ($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "enabled")) {
                echo "1";
            }
            echo "\">
\t\t\t\t<div class=\"actions\">
\t\t\t\t\t<div class=\"status off\" title=\"";
            // line 17
            echo twig_escape_filter($this->env, \Craft\Craft::t("Disabled"), "html", null, true);
            echo "\"></div>
\t\t\t\t\t<a class=\"settings icon menubtn\" title=\"";
            // line 18
            echo twig_escape_filter($this->env, \Craft\Craft::t("Actions"), "html", null, true);
            echo "\" role=\"button\"></a>
\t\t\t\t\t<div class=\"menu padded\" data-align=\"right\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a data-icon=\"collapse\" data-action=\"collapse\">";
            // line 21
            echo twig_escape_filter($this->env, \Craft\Craft::t("Collapse"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t<li class=\"hidden\"><a data-icon=\"expand\" data-action=\"expand\">";
            // line 22
            echo twig_escape_filter($this->env, \Craft\Craft::t("Expand"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t<li";
            // line 23
            if ((!$this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "enabled"))) {
                echo " class=\"hidden\"";
            }
            echo "><a data-icon=\"disabled\" data-action=\"disable\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Disable"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t<li";
            // line 24
            if ($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "enabled")) {
                echo " class=\"hidden\"";
            }
            echo "><a data-icon=\"enabled\" data-action=\"enable\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Enable"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<hr>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
            // line 28
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["blockTypes"]) ? $context["blockTypes"] : $this->getContext($context, "blockTypes")));
            foreach ($context['_seq'] as $context["_key"] => $context["blockType"]) {
                // line 29
                echo "\t\t\t\t\t\t\t\t<li><a data-icon=\"+\" data-action=\"add\" data-type=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blockType"]) ? $context["blockType"] : $this->getContext($context, "blockType")), "handle"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Add {type} above", array("type" => \Craft\Craft::t($this->getAttribute((isset($context["blockType"]) ? $context["blockType"] : $this->getContext($context, "blockType")), "name")))), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blockType'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<hr>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a data-icon=\"remove\" data-action=\"delete\">";
            // line 34
            echo twig_escape_filter($this->env, \Craft\Craft::t("Delete"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<a class=\"move icon\" title=\"";
            // line 37
            echo twig_escape_filter($this->env, \Craft\Craft::t("Reorder"), "html", null, true);
            echo "\" role=\"button\"></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"fields\">
\t\t\t\t\t";
            // line 40
            $this->env->loadTemplate("_includes/fields")->display(array_merge($context, array("namespace" => ((((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) . "[") . (isset($context["blockId"]) ? $context["blockId"] : $this->getContext($context, "blockId"))) . "][fields]"), "element" => (isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "fields" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "getType", array(), "method"), "getFieldLayout", array(), "method"), "getFields", array(), "method"))));
            // line 45
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "\t</div>
\t<div class=\"buttons\">
\t\t<div class=\"btngroup\">
\t\t\t";
        // line 51
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blockTypes"]) ? $context["blockTypes"] : $this->getContext($context, "blockTypes")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["blockType"]) {
            // line 52
            echo "\t\t\t\t<div class=\"btn";
            if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "first")) {
                echo " add icon";
            }
            echo "\" data-type=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blockType"]) ? $context["blockType"] : $this->getContext($context, "blockType")), "handle"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute((isset($context["blockType"]) ? $context["blockType"] : $this->getContext($context, "blockType")), "name")), "html", null, true);
            echo "</div>
\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blockType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "\t\t</div>

\t\t<div class=\"btn add icon menubtn first hidden\">";
        // line 56
        echo twig_escape_filter($this->env, \Craft\Craft::t("Add a block"), "html", null, true);
        echo "</div>
\t\t<div class=\"menu\">
\t\t\t<ul>
\t\t\t\t";
        // line 59
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blockTypes"]) ? $context["blockTypes"] : $this->getContext($context, "blockTypes")));
        foreach ($context['_seq'] as $context["_key"] => $context["blockType"]) {
            // line 60
            echo "\t\t\t\t\t<li><a data-type=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blockType"]) ? $context["blockType"] : $this->getContext($context, "blockType")), "handle"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute((isset($context["blockType"]) ? $context["blockType"] : $this->getContext($context, "blockType")), "name")), "html", null, true);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blockType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/Matrix/input";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 62,  245 => 60,  235 => 56,  231 => 54,  208 => 52,  191 => 51,  186 => 48,  168 => 40,  162 => 37,  151 => 31,  140 => 29,  136 => 28,  117 => 23,  113 => 22,  103 => 18,  99 => 17,  88 => 15,  68 => 13,  65 => 12,  62 => 11,  56 => 9,  53 => 8,  50 => 7,  135 => 35,  132 => 34,  126 => 31,  122 => 30,  118 => 29,  114 => 28,  110 => 27,  106 => 26,  102 => 25,  98 => 24,  89 => 22,  87 => 21,  81 => 18,  77 => 16,  63 => 15,  60 => 14,  33 => 8,  31 => 7,  64 => 6,  59 => 10,  45 => 11,  42 => 6,  37 => 11,  30 => 5,  23 => 2,  26 => 11,  24 => 3,  72 => 14,  55 => 8,  46 => 7,  21 => 2,  19 => 1,  427 => 196,  422 => 193,  419 => 192,  416 => 191,  411 => 189,  407 => 188,  404 => 187,  401 => 186,  398 => 185,  390 => 183,  388 => 182,  382 => 178,  369 => 176,  367 => 175,  364 => 174,  361 => 173,  358 => 172,  355 => 171,  352 => 170,  349 => 169,  346 => 168,  344 => 167,  337 => 165,  329 => 160,  323 => 157,  320 => 156,  318 => 155,  315 => 154,  311 => 152,  306 => 150,  302 => 149,  297 => 148,  295 => 147,  292 => 146,  284 => 144,  282 => 143,  277 => 141,  273 => 140,  267 => 139,  263 => 137,  261 => 136,  257 => 134,  255 => 133,  251 => 131,  248 => 130,  241 => 59,  237 => 125,  234 => 124,  232 => 123,  228 => 121,  224 => 119,  221 => 115,  219 => 114,  215 => 112,  213 => 106,  209 => 104,  207 => 98,  204 => 97,  200 => 95,  197 => 89,  195 => 88,  192 => 87,  188 => 85,  185 => 79,  183 => 78,  179 => 76,  177 => 69,  174 => 68,  170 => 45,  167 => 60,  165 => 59,  161 => 57,  159 => 56,  156 => 34,  152 => 53,  145 => 51,  141 => 49,  134 => 48,  131 => 43,  127 => 42,  125 => 24,  119 => 40,  116 => 39,  112 => 38,  109 => 21,  107 => 36,  104 => 35,  97 => 31,  94 => 23,  92 => 29,  85 => 24,  82 => 23,  80 => 14,  74 => 18,  67 => 11,  61 => 16,  57 => 12,  52 => 14,  49 => 13,  43 => 13,  41 => 201,  39 => 10,  35 => 9,  32 => 6,  29 => 6,  27 => 5,  25 => 3,);
    }
}
