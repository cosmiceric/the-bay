<?php

/* _components/assetsourcetypes/S3/settings */
class __TwigTemplate_7d266f6257665566fc0fcce362a28c8bd2060b1f83913527f59101d21a3da3d4 extends Craft\BaseTemplate
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
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Access Key ID"), "id" => "keyId", "name" => "keyId", "value" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "keyId"), "errors" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "getErrors", array(0 => "keyId"), "method"), "class" => "s3-key-id", "required" => true));
        // line 13
        echo "

";
        // line 15
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Secret Access Key"), "id" => "secret", "name" => "secret", "value" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "secret"), "errors" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "getErrors", array(0 => "secret"), "method"), "class" => "s3-secret-key", "required" => true));
        // line 23
        echo "

";
        // line 25
        ob_start();
        // line 26
        echo "\t<table class=\"inputs\">
\t\t<tr>
\t\t\t<td>
\t\t\t\t";
        // line 29
        echo $context["forms"]->getselect(array("id" => "bucket", "name" => "bucket", "options" => array($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "bucket") => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "bucket")), "value" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "bucket"), "disabled" => true, "class" => "s3-bucket-select"));
        // line 36
        echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\t<div class=\"btn s3-refresh-buckets\">";
        // line 39
        echo twig_escape_filter($this->env, \Craft\Craft::t("Refresh"), "html", null, true);
        echo "</div>
\t\t\t</td>
\t\t\t<td>
\t\t\t\t<div class=\"spinner hidden\"></div>
\t\t\t</td>
\t\t</tr>
\t</table>
";
        $context["bucketInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 47
        echo "
";
        // line 48
        echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("Bucket"), "id" => "bucket"), (isset($context["bucketInput"]) ? $context["bucketInput"] : $this->getContext($context, "bucketInput")));
        // line 51
        echo "

";
        // line 53
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Subfolder"), "instructions" => \Craft\Craft::t("If you want to use a bucket’s subfolder as a Source, specify the path to use here."), "id" => "subfolder", "class" => "ltr", "name" => "subfolder", "value" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "subfolder"), "errors" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "getErrors", array(0 => "subfolder"), "method"), "required" => false, "placeholder" => \Craft\Craft::t("path/to/subfolder")));
        // line 63
        echo "

";
        // line 65
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("URL Prefix "), "instructions" => \Craft\Craft::t("If you have set up a CNAME record pointing to this bucket, you can enter it here. Otherwise leave this setting alone."), "id" => "urlPrefix", "class" => "ltr", "name" => "urlPrefix", "value" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "urlPrefix"), "errors" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "getErrors", array(0 => "url_prefix"), "method"), "required" => true, "class" => "s3-url-prefix"));
        // line 75
        echo "

";
        // line 77
        ob_start();
        // line 78
        echo "\t<table class=\"inputs\">
\t\t<tr>
\t\t\t<td>
\t\t\t\t";
        // line 81
        echo $context["forms"]->gettextField(array("id" => "expiresAmount", "value" => $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "expires"), "amount"), "size" => 2, "class" => "expires-amount"));
        // line 86
        echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
        // line 89
        echo $context["forms"]->getselect(array("id" => "expiresPeriod", "options" => (isset($context["periods"]) ? $context["periods"] : $this->getContext($context, "periods")), "value" => $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "expires"), "period"), "class" => "expires-period"));
        // line 94
        echo "
\t\t\t</td>
\t\t</tr>
\t</table>
\t";
        // line 98
        echo $context["forms"]->gethidden(array("name" => "expires", "value" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "expires"), "amount") . $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "expires"), "period")), "class" => "expires-combined"));
        // line 102
        echo "
";
        $context["cacheInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 104
        echo "
";
        // line 105
        echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("Cache Duration "), "id" => "cacheDuration"), (isset($context["cacheInput"]) ? $context["cacheInput"] : $this->getContext($context, "cacheInput")));
        // line 108
        echo "
<input type=\"hidden\" name=\"location\" class=\"s3-bucket-location\" value=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "location"), "html", null, true);
        echo "\">
";
    }

    public function getTemplateName()
    {
        return "_components/assetsourcetypes/S3/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 109,  123 => 108,  114 => 102,  112 => 98,  106 => 94,  104 => 89,  99 => 86,  97 => 81,  92 => 78,  90 => 77,  84 => 65,  80 => 63,  74 => 51,  69 => 47,  58 => 39,  46 => 26,  44 => 25,  40 => 23,  38 => 15,  34 => 13,  32 => 5,  29 => 4,  27 => 3,  19 => 1,  191 => 73,  184 => 68,  182 => 63,  177 => 60,  174 => 59,  155 => 57,  147 => 56,  144 => 55,  137 => 53,  133 => 52,  127 => 50,  121 => 105,  118 => 104,  108 => 52,  102 => 50,  96 => 48,  93 => 47,  86 => 75,  78 => 53,  75 => 44,  72 => 48,  68 => 42,  64 => 40,  62 => 32,  59 => 31,  57 => 30,  53 => 36,  51 => 29,  47 => 25,  45 => 15,  41 => 13,  35 => 12,  30 => 9,  28 => 8,  26 => 5,  24 => 2,);
    }
}
