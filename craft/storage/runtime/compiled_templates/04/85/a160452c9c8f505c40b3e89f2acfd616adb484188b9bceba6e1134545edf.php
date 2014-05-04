<?php

/* _includes/forms/lightswitch */
class __TwigTemplate_0485a160452c9c8f505c40b3e89f2acfd616adb484188b9bceba6e1134545edf extends Craft\BaseTemplate
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
        $context["on"] = ((array_key_exists("on", $context)) ? ((isset($context["on"]) ? $context["on"] : $this->getContext($context, "on"))) : (false));
        // line 2
        echo "
<div class=\"lightswitch";
        // line 3
        if ((isset($context["on"]) ? $context["on"] : $this->getContext($context, "on"))) {
            echo " on";
        }
        echo "\"";
        if (array_key_exists("toggle", $context)) {
            echo " data-target=\"";
            echo twig_escape_filter($this->env, (isset($context["toggle"]) ? $context["toggle"] : $this->getContext($context, "toggle")), "html", null, true);
            echo "\"";
        }
        echo " tabindex=\"0\">
\t<div class=\"lightswitch-container\">
\t\t<div class=\"label on\"></div>
\t\t<div class=\"handle\"></div>
\t\t<div class=\"label off\"></div>
\t</div>
\t";
        // line 9
        if (array_key_exists("name", $context)) {
            // line 10
            echo "<input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "\" value=\"";
            echo (((isset($context["on"]) ? $context["on"] : $this->getContext($context, "on"))) ? ("1") : (""));
            echo "\">";
        }
        // line 12
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "_includes/forms/lightswitch";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 10,  41 => 9,  21 => 2,  19 => 1,  122 => 82,  116 => 78,  114 => 76,  111 => 75,  108 => 74,  105 => 73,  103 => 72,  100 => 71,  97 => 70,  94 => 69,  91 => 68,  88 => 67,  85 => 66,  83 => 65,  80 => 64,  76 => 61,  72 => 59,  70 => 58,  63 => 54,  58 => 51,  56 => 45,  52 => 43,  50 => 12,  46 => 33,  44 => 25,  40 => 23,  38 => 15,  32 => 11,  30 => 10,  28 => 5,  26 => 3,  24 => 3,);
    }
}
