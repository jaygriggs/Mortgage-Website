<?php

/* themes/danland/templates/block--system-branding-block.html.twig */
class __TwigTemplate_08ea2a975f3d1af12fb1fd1ea0ebb1698c6633232be28fd05dcf588173ab1609 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("block.html.twig", "themes/danland/templates/block--system-branding-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 16, "if" => 18);
        $filters = array();
        $functions = array("path" => 21);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
                array(),
                array('path')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 16
        $context["attributes"] = $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "site-branding"), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        // line 18
        echo "  ";
        if ((isset($context["site_logo"]) ? $context["site_logo"] : null)) {
            // line 19
            echo "    <div id=\"logo-wrapper\">
      <div class=\"logo\">
        <a href=\"";
            // line 21
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("<front>")));
            echo "\" title=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
            echo "\" rel=\"home\" id=\"logo\">
          <img src=\"";
            // line 22
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_logo"]) ? $context["site_logo"] : null), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
            echo "\" />
        </a>
      </div>
    </div><!-- end logo wrapper -->
  ";
        }
        // line 27
        echo "  
  ";
        // line 28
        if (((isset($context["site_name"]) ? $context["site_name"] : null) || (isset($context["site_slogan"]) ? $context["site_slogan"] : null))) {
            // line 29
            echo "    <div id=\"branding-wrapper\">
    ";
            // line 30
            if ((isset($context["site_name"]) ? $context["site_name"] : null)) {
                // line 31
                echo "      ";
                if ((isset($context["is_front"]) ? $context["is_front"] : null)) {
                    // line 32
                    echo "        <h1 class=\"site-name\">
          <a href=\"";
                    // line 33
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("<front>")));
                    echo "\" title=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
                    echo "\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
                    echo "</a>
        </h1>
      ";
                } else {
                    // line 36
                    echo "        <h2 class=\"site-name\">
          <a href=\"";
                    // line 37
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("<front>")));
                    echo "\" title=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
                    echo "\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
                    echo "</a>
        </h2>
      ";
                }
                // line 40
                echo "    ";
            }
            // line 41
            echo "    ";
            if ((isset($context["site_slogan"]) ? $context["site_slogan"] : null)) {
                // line 42
                echo "      <div class='site-slogan'>";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_slogan"]) ? $context["site_slogan"] : null), "html", null, true));
                echo "</div>
    ";
            }
            // line 44
            echo "    </div><!-- end branding wrapper -->
  ";
        }
    }

    public function getTemplateName()
    {
        return "themes/danland/templates/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 44,  126 => 42,  123 => 41,  120 => 40,  110 => 37,  107 => 36,  97 => 33,  94 => 32,  91 => 31,  89 => 30,  86 => 29,  84 => 28,  81 => 27,  71 => 22,  65 => 21,  61 => 19,  58 => 18,  55 => 17,  51 => 1,  49 => 16,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"block.html.twig\" %}
{#
/**
 * @file
 * Danland's theme implementation for a branding block.
 *
 * Each branding element variable (logo, name, slogan) is only available if
 * enabled in the block configuration.
 *
 * Available variables:
 * - site_logo: Logo for site as defined in Appearance or theme settings.
 * - site_name: Name for site as defined in Site information settings.
 * - site_slogan: Slogan for site as defined in Site information settings.
 */
#}
{% set attributes = attributes.addClass('site-branding') %}
{% block content %}
  {% if site_logo %}
    <div id=\"logo-wrapper\">
      <div class=\"logo\">
        <a href=\"{{ path('<front>') }}\" title=\"{{ site_name }}\" rel=\"home\" id=\"logo\">
          <img src=\"{{ site_logo }}\" alt=\"{{ site_name }}\" />
        </a>
      </div>
    </div><!-- end logo wrapper -->
  {% endif %}
  
  {% if site_name or site_slogan %}
    <div id=\"branding-wrapper\">
    {% if site_name %}
      {% if is_front %}
        <h1 class=\"site-name\">
          <a href=\"{{ path('<front>') }}\" title=\"{{ site_name }}\">{{ site_name }}</a>
        </h1>
      {% else %}
        <h2 class=\"site-name\">
          <a href=\"{{ path('<front>') }}\" title=\"{{ site_name }}\">{{ site_name }}</a>
        </h2>
      {% endif %}
    {% endif %}
    {% if site_slogan %}
      <div class='site-slogan'>{{ site_slogan }}</div>
    {% endif %}
    </div><!-- end branding wrapper -->
  {% endif %}
{% endblock %}
";
    }
}
