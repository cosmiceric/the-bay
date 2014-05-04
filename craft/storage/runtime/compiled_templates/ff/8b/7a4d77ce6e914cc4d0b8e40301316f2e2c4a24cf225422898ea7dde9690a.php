<?php

/* settings/general/_logo */
class __TwigTemplate_ff8b7a4d77ce6e914cc4d0b8e40301316f2e2c4a24cf225422898ea7dde9690a extends Craft\BaseTemplate
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
        if (\Craft\craft()->getEdition() < (isset($context["CraftClient"]) ? $context["CraftClient"] : $this->getContext($context, "CraftClient")))
        {
            throw new \Craft\HttpException(404);
        }
        // line 2
        echo "
<div class=\"cp-logo\">

\t<div class=\"current-logo\"
\t\t";
        // line 6
        if ($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "rebrand"), "isLogoUploaded")) {
            // line 7
            echo "style=\"background-image: url(";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "rebrand"), "logo"), "url"), "html", null, true);
            echo "); width: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "rebrand"), "logo"), "width"), "html", null, true);
            echo "px; height: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "rebrand"), "logo"), "height"), "html", null, true);
            echo "px;\"";
        }
        // line 8
        echo ">
\t</div>

\t<div class=\"logo-controls\">
\t\t";
        // line 12
        if ($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "rebrand"), "isLogoUploaded")) {
            // line 13
            echo "\t\t\t<div class=\"btn upload-logo\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Change logo"), "html", null, true);
            echo "</div>
\t\t\t<div class=\"btn delete-logo\">";
            // line 14
            echo twig_escape_filter($this->env, \Craft\Craft::t("Delete logo"), "html", null, true);
            echo "</div>
\t\t";
        } else {
            // line 16
            echo "\t\t\t<div class=\"btn upload-logo\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Upload a logo"), "html", null, true);
            echo "</div>
\t\t";
        }
        // line 18
        echo "\t</div>

</div>
";
    }

    public function getTemplateName()
    {
        return "settings/general/_logo";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 18,  59 => 16,  54 => 14,  49 => 13,  47 => 12,  127 => 36,  123 => 34,  120 => 33,  99 => 30,  96 => 29,  93 => 28,  90 => 27,  84 => 25,  81 => 24,  78 => 23,  74 => 21,  71 => 20,  68 => 19,  64 => 18,  48 => 15,  42 => 14,  27 => 10,  25 => 8,  23 => 7,  43 => 10,  41 => 8,  21 => 6,  19 => 1,  122 => 82,  116 => 78,  114 => 32,  111 => 75,  108 => 74,  105 => 73,  103 => 72,  100 => 71,  97 => 70,  94 => 69,  91 => 68,  88 => 67,  85 => 66,  83 => 65,  80 => 64,  76 => 61,  72 => 59,  70 => 58,  63 => 54,  58 => 51,  56 => 17,  52 => 16,  50 => 12,  46 => 33,  44 => 25,  40 => 23,  38 => 13,  32 => 7,  30 => 6,  28 => 5,  26 => 3,  24 => 2,);
    }
}
