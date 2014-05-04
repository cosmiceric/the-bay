<?php

/* news/_entry */
class __TwigTemplate_f380098402f44c9f9096c2cac48176f94af3bc32aceb45764428e7cf4fd3cbed extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layout");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layout";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        // line 19
        echo "\t<article>
\t\t<h1>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "title"), "html", null, true);
        echo "</h1>
\t\t<p>Posted on ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "postDate"), "format", array(0 => "F d, Y"), "method"), "html", null, true);
        echo "</p>
\t\t";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "body"), "html", null, true);
        echo "
\t</article>
";
    }

    public function getTemplateName()
    {
        return "news/_entry";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 22,  38 => 21,  34 => 20,  31 => 19,  28 => 18,);
    }
}
