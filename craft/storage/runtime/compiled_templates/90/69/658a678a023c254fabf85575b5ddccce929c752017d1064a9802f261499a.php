<?php

/* blog/_entry */
class __TwigTemplate_9069658a678a023c254fabf85575b5ddccce929c752017d1064a9802f261499a extends Craft\BaseTemplate
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

    // line 19
    public function block_content($context, array $blocks = array())
    {
        // line 20
        echo "\t<article>
\t\t<h1>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "title"), "html", null, true);
        echo "</h1>
\t\t<p>Posted on ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "postDate"), "format", array(0 => "F d, Y"), "method"), "html", null, true);
        echo "</p>
\t\t
\t\t";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "articleBody"));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 25
            echo "
    ";
            // line 26
            if (($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "type") == "heading")) {
                // line 27
                echo "
        <";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "headingLevel"), "html", null, true);
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "headingTitle"), "html", null, true);
                echo "</";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "headingLevel"), "html", null, true);
                echo ">
        

    ";
            } elseif (($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "type") == "paragraph")) {
                // line 32
                echo "
        <p>";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('craft')->markdownFilter($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "paragraph")), "html", null, true);
                echo "</p>

    ";
            } elseif (($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "type") == "image")) {
                // line 36
                echo "
        ";
                // line 37
                $context["imageSource"] = $this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "imageSource"), "first", array(), "method");
                // line 38
                echo "        ";
                if ((isset($context["imageSource"]) ? $context["imageSource"] : $this->getContext($context, "imageSource"))) {
                    // line 39
                    echo "            <img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["imageSource"]) ? $context["imageSource"] : $this->getContext($context, "imageSource")), "getUrl", array(), "method"), "html", null, true);
                    echo "\" width=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["imageSource"]) ? $context["imageSource"] : $this->getContext($context, "imageSource")), "getWidth", array(), "method"), "html", null, true);
                    echo "\" height=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["imageSource"]) ? $context["imageSource"] : $this->getContext($context, "imageSource")), "getHeight", array(), "method"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "caption"), "html", null, true);
                    echo "\">
        ";
                }
                // line 41
                echo "
        ";
                // line 42
                $context["caption"] = $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "caption");
                // line 43
                echo "        ";
                if ((isset($context["caption"]) ? $context["caption"] : $this->getContext($context, "caption"))) {
                    // line 44
                    echo "\t\t\t\t\t<div class=\"caption\">";
                    echo twig_escape_filter($this->env, (isset($context["caption"]) ? $context["caption"] : $this->getContext($context, "caption")), "html", null, true);
                    echo "
        ";
                }
                // line 46
                echo "
    ";
            } elseif (($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "type") == "pullquote")) {
                // line 48
                echo "
        <blockquote>
            <p>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "pullquoteTitle"), "html", null, true);
                echo "</p>
        </blockquote>

    ";
            }
            // line 54
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "\t</article>
";
    }

    public function getTemplateName()
    {
        return "blog/_entry";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 56,  124 => 54,  117 => 50,  113 => 48,  109 => 46,  103 => 44,  100 => 43,  98 => 42,  95 => 41,  83 => 39,  80 => 38,  78 => 37,  75 => 36,  69 => 33,  66 => 32,  55 => 28,  52 => 27,  50 => 26,  47 => 25,  43 => 24,  38 => 22,  34 => 21,  31 => 20,  28 => 19,);
    }
}
