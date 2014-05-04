<?php

/* _components/assetsourcetypes/Rackspace/settings */
class __TwigTemplate_c64125f008758b5d2b5331197a96ef4bbb57e3ed98f65dc1979a1644ece26f8c extends Craft\BaseTemplate
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
        if (\Craft\craft()->getEdition() < (isset($context["CraftPro"]) ? $context["CraftPro"] : $this->getContext($context, "CraftPro")))
        {
            throw new \Craft\HttpException(404);
        }
        // line 2
        echo "
";
        // line 3
        $context["forms"] = $this->env->loadTemplate("_includes/forms");
        // line 4
        echo "
";
        // line 5
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Username"), "id" => "username", "name" => "username", "value" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "username"), "errors" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "getErrors", array(0 => "username"), "method"), "class" => "rackspace-username", "required" => true));
        // line 13
        echo "

";
        // line 15
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("API Key"), "id" => "apiKey", "name" => "apiKey", "value" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "apiKey"), "errors" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "getErrors", array(0 => "apiKey"), "method"), "class" => "racskspace-api-key", "required" => true));
        // line 23
        echo "

";
        // line 25
        ob_start();
        // line 26
        echo "<table class=\"inputs\">
\t<tr>
\t\t<td>
\t\t\t";
        // line 29
        echo $context["forms"]->getselect(array("id" => "region", "name" => "region", "options" => array($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "region") => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "region")), "value" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "region"), "disabled" => true, "class" => "rackspace-region-select"));
        // line 36
        echo "
\t\t</td>
\t\t<td>
\t\t\t<div class=\"btn rackspace-refresh-regions\">";
        // line 39
        echo twig_escape_filter($this->env, \Craft\Craft::t("Refresh"), "html", null, true);
        echo "</div>
\t\t</td>
\t\t<td>
\t\t\t<div class=\"spinner hidden\"></div>
\t\t</td>
\t</tr>
</table>
";
        $context["regionInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 47
        echo "
";
        // line 48
        echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("Region"), "id" => "region"), (isset($context["regionInput"]) ? $context["regionInput"] : $this->getContext($context, "regionInput")));
        // line 51
        echo "

";
        // line 53
        ob_start();
        // line 54
        echo "    <table class=\"inputs\">
        <tr>
            <td>
                ";
        // line 57
        echo $context["forms"]->getselect(array("id" => "container", "name" => "container", "options" => array($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "container") => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "container")), "value" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "container"), "disabled" => true, "class" => "rackspace-container-select"));
        // line 64
        echo "
            </td>
            <td>
                <div class=\"btn rackspace-refresh-containers\">";
        // line 67
        echo twig_escape_filter($this->env, \Craft\Craft::t("Refresh"), "html", null, true);
        echo "</div>
            </td>
            <td>
                <div class=\"spinner hidden\"></div>
            </td>
        </tr>
    </table>
";
        $context["containerInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 75
        echo "
";
        // line 76
        echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("Container"), "id" => "container"), (isset($context["containerInput"]) ? $context["containerInput"] : $this->getContext($context, "containerInput")));
        // line 79
        echo "

";
        // line 81
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Subfolder"), "instructions" => \Craft\Craft::t("If you want to use a container’s subfolder as a Source, specify the path to use here."), "id" => "subfolder", "class" => "ltr", "name" => "subfolder", "value" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "subfolder"), "errors" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "getErrors", array(0 => "subfolder"), "method"), "required" => false, "placeholder" => \Craft\Craft::t("path/to/subfolder")));
        // line 91
        echo "

";
        // line 93
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("URL Prefix "), "instructions" => \Craft\Craft::t("If you have set up a CNAME record pointing to this container, you can enter it here. Otherwise leave this setting alone."), "id" => "urlPrefix", "class" => "ltr", "name" => "urlPrefix", "value" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "urlPrefix"), "errors" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "getErrors", array(0 => "url_prefix"), "method"), "required" => true, "class" => "rackspace-url-prefix"));
        // line 103
        echo "
";
    }

    public function getTemplateName()
    {
        return "_components/assetsourcetypes/Rackspace/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 103,  103 => 75,  87 => 64,  85 => 57,  33 => 4,  21 => 2,  126 => 109,  123 => 108,  114 => 91,  112 => 81,  106 => 76,  104 => 89,  99 => 86,  97 => 81,  92 => 67,  90 => 77,  84 => 65,  80 => 54,  74 => 51,  69 => 47,  58 => 39,  46 => 26,  44 => 25,  40 => 23,  38 => 15,  34 => 13,  32 => 5,  29 => 4,  27 => 3,  19 => 1,  191 => 73,  184 => 68,  182 => 63,  177 => 60,  174 => 59,  155 => 57,  147 => 56,  144 => 55,  137 => 53,  133 => 52,  127 => 50,  121 => 105,  118 => 93,  108 => 79,  102 => 50,  96 => 48,  93 => 47,  86 => 75,  78 => 53,  75 => 44,  72 => 48,  68 => 42,  64 => 40,  62 => 32,  59 => 31,  57 => 30,  53 => 36,  51 => 29,  47 => 25,  45 => 15,  41 => 13,  35 => 12,  30 => 15,  28 => 8,  26 => 13,  24 => 2,);
    }
}
