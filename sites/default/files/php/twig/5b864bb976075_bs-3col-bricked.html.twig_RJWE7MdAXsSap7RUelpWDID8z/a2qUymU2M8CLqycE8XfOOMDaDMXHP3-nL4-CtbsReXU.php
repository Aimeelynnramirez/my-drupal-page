<?php

/* modules/bootstrap_layouts/templates/3.0.0/bs-3col-bricked.html.twig */
class __TwigTemplate_0a54e8dd9e302df8375d3ac037b098f3c40634c18577ff9f1c1fc7589cfae57f extends Twig_Template
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
        $tags = array("if" => 30);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 27
        echo "<";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["wrapper"] ?? null), "html", null, true));
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
        echo ">
  ";
        // line 28
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_suffix"] ?? null), "contextual_links", array()), "html", null, true));
        echo "

  ";
        // line 30
        if ($this->getAttribute(($context["top"] ?? null), "content", array())) {
            // line 31
            echo "  <";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["top"] ?? null), "wrapper", array()), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["top"] ?? null), "attributes", array()), "html", null, true));
            echo ">
    ";
            // line 32
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["top"] ?? null), "content", array()), "html", null, true));
            echo "
  </";
            // line 33
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["top"] ?? null), "wrapper", array()), "html", null, true));
            echo ">
  ";
        }
        // line 35
        echo "
  ";
        // line 36
        if ($this->getAttribute(($context["top_left"] ?? null), "content", array())) {
            // line 37
            echo "  <";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["top_left"] ?? null), "wrapper", array()), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["top_left"] ?? null), "attributes", array()), "html", null, true));
            echo ">
    ";
            // line 38
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["top_left"] ?? null), "content", array()), "html", null, true));
            echo "
  </";
            // line 39
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["top_left"] ?? null), "wrapper", array()), "html", null, true));
            echo ">
  ";
        }
        // line 41
        echo "
  ";
        // line 42
        if ($this->getAttribute(($context["top_middle"] ?? null), "content", array())) {
            // line 43
            echo "  <";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["top_middle"] ?? null), "wrapper", array()), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["top_middle"] ?? null), "attributes", array()), "html", null, true));
            echo ">
    ";
            // line 44
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["top_middle"] ?? null), "content", array()), "html", null, true));
            echo "
  </";
            // line 45
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["top_middle"] ?? null), "wrapper", array()), "html", null, true));
            echo ">
  ";
        }
        // line 47
        echo "
  ";
        // line 48
        if ($this->getAttribute(($context["top_right"] ?? null), "content", array())) {
            // line 49
            echo "  <";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["top_right"] ?? null), "wrapper", array()), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["top_right"] ?? null), "attributes", array()), "html", null, true));
            echo ">
    ";
            // line 50
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["top_right"] ?? null), "content", array()), "html", null, true));
            echo "
  </";
            // line 51
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["top_right"] ?? null), "wrapper", array()), "html", null, true));
            echo ">
  ";
        }
        // line 53
        echo "
  ";
        // line 54
        if ($this->getAttribute(($context["middle"] ?? null), "content", array())) {
            // line 55
            echo "  <";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["middle"] ?? null), "wrapper", array()), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["middle"] ?? null), "attributes", array()), "html", null, true));
            echo ">
    ";
            // line 56
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["middle"] ?? null), "content", array()), "html", null, true));
            echo "
  </";
            // line 57
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["middle"] ?? null), "wrapper", array()), "html", null, true));
            echo ">
  ";
        }
        // line 59
        echo "
  ";
        // line 60
        if ($this->getAttribute(($context["bottom_left"] ?? null), "content", array())) {
            // line 61
            echo "  <";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["bottom_left"] ?? null), "wrapper", array()), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["bottom_left"] ?? null), "attributes", array()), "html", null, true));
            echo ">
    ";
            // line 62
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["bottom_left"] ?? null), "content", array()), "html", null, true));
            echo "
  </";
            // line 63
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["bottom_left"] ?? null), "wrapper", array()), "html", null, true));
            echo ">
  ";
        }
        // line 65
        echo "
  ";
        // line 66
        if ($this->getAttribute(($context["bottom_middle"] ?? null), "content", array())) {
            // line 67
            echo "  <";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["bottom_middle"] ?? null), "wrapper", array()), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["bottom_middle"] ?? null), "attributes", array()), "html", null, true));
            echo ">
    ";
            // line 68
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["bottom_middle"] ?? null), "content", array()), "html", null, true));
            echo "
  </";
            // line 69
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["bottom_middle"] ?? null), "wrapper", array()), "html", null, true));
            echo ">
  ";
        }
        // line 71
        echo "
  ";
        // line 72
        if ($this->getAttribute(($context["bottom_right"] ?? null), "content", array())) {
            // line 73
            echo "  <";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["bottom_right"] ?? null), "wrapper", array()), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["bottom_right"] ?? null), "attributes", array()), "html", null, true));
            echo ">
    ";
            // line 74
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["bottom_right"] ?? null), "content", array()), "html", null, true));
            echo "
  </";
            // line 75
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["bottom_right"] ?? null), "wrapper", array()), "html", null, true));
            echo ">
  ";
        }
        // line 77
        echo "
  ";
        // line 78
        if ($this->getAttribute(($context["bottom"] ?? null), "content", array())) {
            // line 79
            echo "  <";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["bottom"] ?? null), "wrapper", array()), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["bottom"] ?? null), "attributes", array()), "html", null, true));
            echo ">
    ";
            // line 80
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["bottom"] ?? null), "content", array()), "html", null, true));
            echo "
  </";
            // line 81
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["bottom"] ?? null), "wrapper", array()), "html", null, true));
            echo ">
  ";
        }
        // line 83
        echo "
</";
        // line 84
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["wrapper"] ?? null), "html", null, true));
        echo ">
";
    }

    public function getTemplateName()
    {
        return "modules/bootstrap_layouts/templates/3.0.0/bs-3col-bricked.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 84,  231 => 83,  226 => 81,  222 => 80,  216 => 79,  214 => 78,  211 => 77,  206 => 75,  202 => 74,  196 => 73,  194 => 72,  191 => 71,  186 => 69,  182 => 68,  176 => 67,  174 => 66,  171 => 65,  166 => 63,  162 => 62,  156 => 61,  154 => 60,  151 => 59,  146 => 57,  142 => 56,  136 => 55,  134 => 54,  131 => 53,  126 => 51,  122 => 50,  116 => 49,  114 => 48,  111 => 47,  106 => 45,  102 => 44,  96 => 43,  94 => 42,  91 => 41,  86 => 39,  82 => 38,  76 => 37,  74 => 36,  71 => 35,  66 => 33,  62 => 32,  56 => 31,  54 => 30,  49 => 28,  43 => 27,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/bootstrap_layouts/templates/3.0.0/bs-3col-bricked.html.twig", "/Users/adapttech/Sites/devdesktop/lightning-8.x-3.105/modules/bootstrap_layouts/templates/3.0.0/bs-3col-bricked.html.twig");
    }
}
