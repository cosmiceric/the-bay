<?php

/* _components/assetsourcetypes/Local/settings */
class __TwigTemplate_2fb197db9a6f29b3d551a9732529c8d2f2b9b76fcf490f9c48c8314901c8e9ac extends Craft\BaseTemplate
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
        $context["__internal_2ca2b6bf9cc782b12730a39125dbd7b9120b6f0657e49aea8c21e5f8f3a529f0"] = $this->env->loadTemplate("_includes/forms");
        // line 2
        echo "
";
        // line 3
        echo $context["__internal_2ca2b6bf9cc782b12730a39125dbd7b9120b6f0657e49aea8c21e5f8f3a529f0"]->gettextField(array("label" => \Craft\Craft::t("File System Path"), "instructions" => \Craft\Craft::t("The path to your folder on the file system."), "id" => "path", "class" => "ltr", "name" => "path", "value" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "path"), "errors" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "getErrors", array(0 => "path"), "method"), "required" => true, "placeholder" => \Craft\Craft::t("/path/to/folder/")));
        // line 13
        echo "

";
        // line 15
        echo $context["__internal_2ca2b6bf9cc782b12730a39125dbd7b9120b6f0657e49aea8c21e5f8f3a529f0"]->gettextField(array("label" => \Craft\Craft::t("URL"), "instructions" => \Craft\Craft::t("The URL to your folder."), "id" => "url", "class" => "ltr", "name" => "url", "value" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "url"), "errors" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "getErrors", array(0 => "url"), "method"), "required" => true, "placeholder" => \Craft\Craft::t("http://example.com/path/to/folder/")));
        // line 25
        echo "
";
    }

    public function getTemplateName()
    {
        return "_components/assetsourcetypes/Local/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  21 => 2,  126 => 109,  123 => 108,  114 => 102,  112 => 98,  106 => 94,  104 => 89,  99 => 86,  97 => 81,  92 => 78,  90 => 77,  84 => 65,  80 => 63,  74 => 51,  69 => 47,  58 => 39,  46 => 26,  44 => 25,  40 => 23,  38 => 15,  34 => 13,  32 => 25,  29 => 4,  27 => 3,  19 => 1,  191 => 73,  184 => 68,  182 => 63,  177 => 60,  174 => 59,  155 => 57,  147 => 56,  144 => 55,  137 => 53,  133 => 52,  127 => 50,  121 => 105,  118 => 104,  108 => 52,  102 => 50,  96 => 48,  93 => 47,  86 => 75,  78 => 53,  75 => 44,  72 => 48,  68 => 42,  64 => 40,  62 => 32,  59 => 31,  57 => 30,  53 => 36,  51 => 29,  47 => 25,  45 => 15,  41 => 13,  35 => 12,  30 => 15,  28 => 8,  26 => 13,  24 => 3,);
    }
}
