<?php

/* _includes/tabs */
class __TwigTemplate_e9368598639bc71d75100c6a22078000de592a5ab043df0b11fc900bcf0072f8 extends Craft\BaseTemplate
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
        $context["title"] = ((array_key_exists("title", $context)) ? (array_key_exists("title", $context)) : (null));
        // line 2
        echo "
<nav id=\"tabs\" class=\"tabs\">
\t<ul>
\t\t";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabs"]) ? $context["tabs"] : $this->getContext($context, "tabs")));
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
        foreach ($context['_seq'] as $context["tabId"] => $context["tab"]) {
            // line 6
            echo "\t\t\t";
            if ((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab"))) {
                // line 7
                echo "\t\t\t\t";
                $context["tabIsSelected"] = (((!array_key_exists("selectedTab", $context)) && $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "first")) || (array_key_exists("selectedTab", $context) && ((isset($context["selectedTab"]) ? $context["selectedTab"] : $this->getContext($context, "selectedTab")) == (isset($context["tabId"]) ? $context["tabId"] : $this->getContext($context, "tabId")))));
                // line 9
                if (((isset($context["tabIsSelected"]) ? $context["tabIsSelected"] : $this->getContext($context, "tabIsSelected")) && ((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")) != $this->getAttribute((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")), "label")))) {
                    // line 10
                    echo "\t\t\t\t\t";
                    $context["title"] = (((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")) . " - ") . $this->getAttribute((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")), "label"));
                    // line 11
                    echo "\t\t\t\t";
                }
                // line 13
                echo "<li><a id=\"tab-";
                echo twig_escape_filter($this->env, (isset($context["tabId"]) ? $context["tabId"] : $this->getContext($context, "tabId")), "html", null, true);
                echo "\" class=\"tab";
                if ((isset($context["tabIsSelected"]) ? $context["tabIsSelected"] : $this->getContext($context, "tabIsSelected"))) {
                    echo " sel";
                }
                if ($this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), "class", array(), "any", true, true)) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")), "class"), "html", null, true);
                }
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")), "url"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")), "label"), "html", null, true);
                echo "</a></li>
\t\t\t";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['tabId'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t</ul>
</nav>
";
    }

    public function getTemplateName()
    {
        return "_includes/tabs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 16,  75 => 15,  54 => 11,  51 => 10,  49 => 9,  46 => 7,  21 => 2,  19 => 1,  151 => 58,  134 => 41,  126 => 36,  122 => 34,  117 => 31,  107 => 28,  100 => 27,  92 => 26,  84 => 25,  77 => 24,  73 => 23,  68 => 20,  63 => 19,  57 => 13,  53 => 17,  48 => 14,  45 => 13,  43 => 6,  37 => 9,  30 => 8,  28 => 9,  26 => 5,  24 => 2,);
    }
}
