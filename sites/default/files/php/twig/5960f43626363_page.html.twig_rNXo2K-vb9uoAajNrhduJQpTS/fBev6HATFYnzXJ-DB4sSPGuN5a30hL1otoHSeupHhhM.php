<?php

/* themes/danland/templates/page.html.twig */
class __TwigTemplate_a10b0343ad96b404ddf83a1e5da88e7ffea8ff126b942f581811fb5bf7ea385e extends Twig_Template
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
        $tags = array("if" => 9, "for" => 57);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'for'),
                array(),
                array()
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

        // line 2
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["danland_layout"]) ? $context["danland_layout"] : null), "html", null, true));
        echo ">

  <div id=\"header\">
    <div id=\"header-wrapper\">

      ";
        // line 7
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "

      ";
        // line 9
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "search_box", array())) {
            // line 10
            echo "        <div id=\"search-box\">
          ";
            // line 11
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "search_box", array()), "html", null, true));
            echo "
        </div><!-- /search-box -->
      ";
        }
        // line 14
        echo "
      ";
        // line 15
        if ((isset($context["feed_icons"]) ? $context["feed_icons"] : null)) {
            // line 16
            echo "        <div class=\"feed-wrapper\">
          ";
            // line 17
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["feed_icons"]) ? $context["feed_icons"] : null), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 20
        echo "      
    </div><!-- end header-wrapper -->
  </div> <!-- /header -->

  <div style=\"clear:both\"></div>

  <div id=\"menu\">
      ";
        // line 27
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array())) {
            // line 28
            echo "        <div id=\"nav\">
          ";
            // line 29
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 32
        echo "  </div> <!-- end menu -->

  <div style=\"clear:both\"></div>

  ";
        // line 36
        if ((isset($context["is_front"]) ? $context["is_front"] : null)) {
            // line 37
            echo "    <div id=\"slideshow-wrapper\">
      <div class=\"slideshow-inner\">
        ";
            // line 39
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface", array())) {
                // line 40
                echo "          <div id=\"slideshow-preface\">
            <div id=\"preface\">
              ";
                // line 42
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface", array()), "html", null, true));
                echo "
            </div><!-- end preface -->
          </div>
        ";
            }
            // line 46
            echo "        ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
                // line 47
                echo "          <div id=\"slideshow-bottom\">
            <div id=\"mission\">";
                // line 48
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
                echo "</div>
          </div>
        ";
            }
            // line 51
            echo "        ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slideshow", array())) {
                // line 52
                echo "          <div class=\"custom-slideshow\">
            ";
                // line 53
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slideshow", array()), "html", null, true));
                echo "
          </div>
\t\t";
            } else {
                // line 56
                echo "          <div class=\"slideshow\">
            ";
                // line 57
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["files"]) ? $context["files"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                    // line 58
                    echo "              <img src=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["file"], "uri", array()), "html", null, true));
                    echo "\" width=\"100%\" height=\"100%\" alt=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["file"], "name", array()), "html", null, true));
                    echo "\"/>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                echo "          </div>
        ";
            }
            // line 62
            echo "      </div>
    </div>
  ";
        }
        // line 65
        echo "
  ";
        // line 66
        if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface_middle", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface_last", array()))) {
            // line 67
            echo "    <div style=\"clear:both\"></div>
    <div id=\"preface-wrapper\" ";
            // line 68
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["danland_preface"]) ? $context["danland_preface"] : null), "html", null, true));
            echo ">
      ";
            // line 69
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface_first", array())) {
                // line 70
                echo "        <div class=\"column A\">
          ";
                // line 71
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface_first", array()), "html", null, true));
                echo "
        </div>
      ";
            }
            // line 74
            echo "      ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface_middle", array())) {
                // line 75
                echo "        <div class=\"column B\">
          ";
                // line 76
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface_middle", array()), "html", null, true));
                echo "
        </div>
      ";
            }
            // line 79
            echo "      ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface_last", array())) {
                // line 80
                echo "        <div class=\"column C\">
          ";
                // line 81
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface_last", array()), "html", null, true));
                echo "
        </div>
      ";
            }
            // line 84
            echo "      <div style=\"clear:both\"></div>
    </div>
  ";
        }
        // line 87
        echo "
  <div style=\"clear:both\"></div>

  <div id=\"wrapper\">
    
    <div id=\"content\">

      <a id=\"main-content\"></a>
      ";
        // line 95
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top", array())) {
            // line 96
            echo "        <div class=\"content-top\">
          ";
            // line 97
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 100
        echo "      
      ";
        // line 101
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true));
        echo "
      
      ";
        // line 103
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "messages", array()), "html", null, true));
        echo "
      
      ";
        // line 105
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
      
      ";
        // line 107
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 108
            echo "        <h1 class=\"title\" id=\"page-title\">
          ";
            // line 109
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "
        </h1>
      ";
        }
        // line 112
        echo "      
      ";
        // line 113
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "
      
      ";
        // line 115
        if ((isset($context["tabs"]) ? $context["tabs"] : null)) {
            // line 116
            echo "        <div class=\"tabs\">
          ";
            // line 117
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["tabs"]) ? $context["tabs"] : null), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 120
        echo "      
      ";
        // line 121
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
      
      ";
        // line 123
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 124
            echo "        <ul class=\"action-links\">
          ";
            // line 125
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
            echo "
        </ul>
      ";
        }
        // line 128
        echo "      
      ";
        // line 129
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())) {
            // line 130
            echo "        <div class=\"content-middle\">
          ";
            // line 131
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 134
        echo "      
      ";
        // line 135
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom", array())) {
            // line 136
            echo "        <div class=\"content-bottom\">
          ";
            // line 137
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 140
        echo "      
    </div> <!-- end content -->
\t
    ";
        // line 143
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 144
            echo "      <div id=\"sidebar-left\" class=\"column sidebar\">
        <div class=\"section\">
          ";
            // line 146
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
        </div>
      </div> <!-- end sidebar-first -->
    ";
        }
        // line 150
        echo "
    ";
        // line 151
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 152
            echo "      <div id=\"sidebar-right\" class=\"column sidebar\">
        <div class=\"section\">
          ";
            // line 154
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
        </div>
      </div> <!-- end sidebar-second -->
    ";
        }
        // line 158
        echo "
    <div style=\"clear:both\"></div>

  </div> <!-- end wrapper -->


  ";
        // line 164
        if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_middle", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_last", array()))) {
            // line 165
            echo "    <div style=\"clear:both\"></div>
    <div id=\"bottom-teaser\" ";
            // line 166
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["danland_bottom_a"]) ? $context["danland_bottom_a"] : null), "html", null, true));
            echo ">
      ";
            // line 167
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_first", array())) {
                // line 168
                echo "        <div class=\"column A\">
          ";
                // line 169
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_first", array()), "html", null, true));
                echo "
        </div>
      ";
            }
            // line 172
            echo "      ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_middle", array())) {
                // line 173
                echo "        <div class=\"column B\">
          ";
                // line 174
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_middle", array()), "html", null, true));
                echo "
        </div>
      ";
            }
            // line 177
            echo "      ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_last", array())) {
                // line 178
                echo "        <div class=\"column C\">
          ";
                // line 179
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_last", array()), "html", null, true));
                echo "
        </div>
      ";
            }
            // line 182
            echo "      <div style=\"clear:both\"></div>
    </div> <!-- end bottom first etc. -->
  ";
        }
        // line 185
        echo "

  ";
        // line 187
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_1", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_2", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_3", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_4", array()))) {
            // line 188
            echo "    <div style=\"clear:both\"></div><!-- Do not touch -->
    <div id=\"bottom-wrapper\" ";
            // line 189
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["danland_bottom_b"]) ? $context["danland_bottom_b"] : null), "html", null, true));
            echo ">
      ";
            // line 190
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_1", array())) {
                // line 191
                echo "        <div class=\"column A\">
          ";
                // line 192
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_1", array()), "html", null, true));
                echo "
        </div>
      ";
            }
            // line 195
            echo "      ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_2", array())) {
                // line 196
                echo "        <div class=\"column B\">
          ";
                // line 197
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_2", array()), "html", null, true));
                echo "
        </div>
      ";
            }
            // line 200
            echo "      ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_3", array())) {
                // line 201
                echo "        <div class=\"column C\">
          ";
                // line 202
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_3", array()), "html", null, true));
                echo "
        </div>
      ";
            }
            // line 205
            echo "      ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_4", array())) {
                // line 206
                echo "        <div class=\"column D\">
          ";
                // line 207
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_4", array()), "html", null, true));
                echo "
        </div>
      ";
            }
            // line 210
            echo "      <div style=\"clear:both\"></div>
    </div><!-- end bottom -->
  ";
        }
        // line 213
        echo "
  <div style=\"clear:both\"></div>

  <div id=\"footer-wrapper\">
    ";
        // line 217
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 218
            echo "      <div id=\"footer\">
        ";
            // line 219
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 222
        echo "    ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "secondary_menu", array())) {
            // line 223
            echo "      <div id=\"secondary-menu\">
        ";
            // line 224
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "secondary_menu", array()), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 227
        echo "  </div> <!-- end footer wrapper -->

  <div style=\"clear:both\"></div>

  <div id=\"notice\">
    <p>Theme by <a href=\"http://www.danetsoft.com\">Danetsoft</a> and <a href=\"http://www.danpros.com\">Danang Probo Sayekti</a> inspired by <a href=\"http://www.maksimer.no\">Maksimer</a></p>
  </div>
  
</div>";
    }

    public function getTemplateName()
    {
        return "themes/danland/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  531 => 227,  525 => 224,  522 => 223,  519 => 222,  513 => 219,  510 => 218,  508 => 217,  502 => 213,  497 => 210,  491 => 207,  488 => 206,  485 => 205,  479 => 202,  476 => 201,  473 => 200,  467 => 197,  464 => 196,  461 => 195,  455 => 192,  452 => 191,  450 => 190,  446 => 189,  443 => 188,  441 => 187,  437 => 185,  432 => 182,  426 => 179,  423 => 178,  420 => 177,  414 => 174,  411 => 173,  408 => 172,  402 => 169,  399 => 168,  397 => 167,  393 => 166,  390 => 165,  388 => 164,  380 => 158,  373 => 154,  369 => 152,  367 => 151,  364 => 150,  357 => 146,  353 => 144,  351 => 143,  346 => 140,  340 => 137,  337 => 136,  335 => 135,  332 => 134,  326 => 131,  323 => 130,  321 => 129,  318 => 128,  312 => 125,  309 => 124,  307 => 123,  302 => 121,  299 => 120,  293 => 117,  290 => 116,  288 => 115,  283 => 113,  280 => 112,  274 => 109,  271 => 108,  269 => 107,  264 => 105,  259 => 103,  254 => 101,  251 => 100,  245 => 97,  242 => 96,  240 => 95,  230 => 87,  225 => 84,  219 => 81,  216 => 80,  213 => 79,  207 => 76,  204 => 75,  201 => 74,  195 => 71,  192 => 70,  190 => 69,  186 => 68,  183 => 67,  181 => 66,  178 => 65,  173 => 62,  169 => 60,  158 => 58,  154 => 57,  151 => 56,  145 => 53,  142 => 52,  139 => 51,  133 => 48,  130 => 47,  127 => 46,  120 => 42,  116 => 40,  114 => 39,  110 => 37,  108 => 36,  102 => 32,  96 => 29,  93 => 28,  91 => 27,  82 => 20,  76 => 17,  73 => 16,  71 => 15,  68 => 14,  62 => 11,  59 => 10,  57 => 9,  52 => 7,  43 => 2,);
    }

    public function getSource()
    {
        return "{# #}
<div{{ danland_layout }}>

  <div id=\"header\">
    <div id=\"header-wrapper\">

      {{ page.header }}

      {% if page.search_box %}
        <div id=\"search-box\">
          {{ page.search_box }}
        </div><!-- /search-box -->
      {% endif %}

      {% if feed_icons %}
        <div class=\"feed-wrapper\">
          {{ feed_icons }}
        </div>
      {% endif %}
      
    </div><!-- end header-wrapper -->
  </div> <!-- /header -->

  <div style=\"clear:both\"></div>

  <div id=\"menu\">
      {% if page.primary_menu %}
        <div id=\"nav\">
          {{ page.primary_menu }}
        </div>
      {% endif %}
  </div> <!-- end menu -->

  <div style=\"clear:both\"></div>

  {% if is_front %}
    <div id=\"slideshow-wrapper\">
      <div class=\"slideshow-inner\">
        {% if page.preface %}
          <div id=\"slideshow-preface\">
            <div id=\"preface\">
              {{ page.preface }}
            </div><!-- end preface -->
          </div>
        {% endif %}
        {% if page.highlighted %}
          <div id=\"slideshow-bottom\">
            <div id=\"mission\">{{ page.highlighted }}</div>
          </div>
        {% endif %}
        {% if page.slideshow %}
          <div class=\"custom-slideshow\">
            {{ page.slideshow }}
          </div>
\t\t{% else %}
          <div class=\"slideshow\">
            {% for file in files %}
              <img src=\"{{ file.uri }}\" width=\"100%\" height=\"100%\" alt=\"{{ file.name }}\"/>
            {% endfor %}
          </div>
        {% endif %}
      </div>
    </div>
  {% endif %}

  {% if page.preface_first or page.preface_middle or page.preface_last %}
    <div style=\"clear:both\"></div>
    <div id=\"preface-wrapper\" {{ danland_preface}}>
      {% if page.preface_first %}
        <div class=\"column A\">
          {{ page.preface_first }}
        </div>
      {% endif %}
      {% if page.preface_middle %}
        <div class=\"column B\">
          {{ page.preface_middle }}
        </div>
      {% endif %}
      {% if page.preface_last %}
        <div class=\"column C\">
          {{ page.preface_last }}
        </div>
      {% endif %}
      <div style=\"clear:both\"></div>
    </div>
  {% endif %}

  <div style=\"clear:both\"></div>

  <div id=\"wrapper\">
    
    <div id=\"content\">

      <a id=\"main-content\"></a>
      {% if page.content_top %}
        <div class=\"content-top\">
          {{ page.content_top }}
        </div>
      {% endif %}
      
      {{ page.breadcrumb }}
      
      {{ page.messages }}
      
      {{ title_prefix }}
      
      {% if title %}
        <h1 class=\"title\" id=\"page-title\">
          {{ title }}
        </h1>
      {% endif %}
      
      {{ title_suffix }}
      
      {% if tabs %}
        <div class=\"tabs\">
          {{ tabs }}
        </div>
      {% endif %}
      
      {{ page.help }}
      
      {% if action_links %}
        <ul class=\"action-links\">
          {{ action_links }}
        </ul>
      {% endif %}
      
      {% if page.content %}
        <div class=\"content-middle\">
          {{ page.content }}
        </div>
      {% endif %}
      
      {% if page.content_bottom %}
        <div class=\"content-bottom\">
          {{ page.content_bottom }}
        </div>
      {% endif %}
      
    </div> <!-- end content -->
\t
    {% if page.sidebar_first %}
      <div id=\"sidebar-left\" class=\"column sidebar\">
        <div class=\"section\">
          {{ page.sidebar_first }}
        </div>
      </div> <!-- end sidebar-first -->
    {% endif %}

    {% if page.sidebar_second %}
      <div id=\"sidebar-right\" class=\"column sidebar\">
        <div class=\"section\">
          {{ page.sidebar_second }}
        </div>
      </div> <!-- end sidebar-second -->
    {% endif %}

    <div style=\"clear:both\"></div>

  </div> <!-- end wrapper -->


  {% if page.bottom_first or page.bottom_middle or page.bottom_last %}
    <div style=\"clear:both\"></div>
    <div id=\"bottom-teaser\" {{ danland_bottom_a }}>
      {% if page.bottom_first %}
        <div class=\"column A\">
          {{ page.bottom_first }}
        </div>
      {% endif %}
      {% if page.bottom_middle %}
        <div class=\"column B\">
          {{ page.bottom_middle }}
        </div>
      {% endif %}
      {% if page.bottom_last %}
        <div class=\"column C\">
          {{ page.bottom_last }}
        </div>
      {% endif %}
      <div style=\"clear:both\"></div>
    </div> <!-- end bottom first etc. -->
  {% endif %}


  {% if page.bottom_1 or page.bottom_2 or page.bottom_3 or page.bottom_4 %}
    <div style=\"clear:both\"></div><!-- Do not touch -->
    <div id=\"bottom-wrapper\" {{ danland_bottom_b }}>
      {% if page.bottom_1 %}
        <div class=\"column A\">
          {{ page.bottom_1 }}
        </div>
      {% endif %}
      {% if page.bottom_2 %}
        <div class=\"column B\">
          {{ page.bottom_2 }}
        </div>
      {% endif %}
      {% if page.bottom_3 %}
        <div class=\"column C\">
          {{ page.bottom_3 }}
        </div>
      {% endif %}
      {% if page.bottom_4 %}
        <div class=\"column D\">
          {{ page.bottom_4 }}
        </div>
      {% endif %}
      <div style=\"clear:both\"></div>
    </div><!-- end bottom -->
  {% endif %}

  <div style=\"clear:both\"></div>

  <div id=\"footer-wrapper\">
    {% if page.footer %}
      <div id=\"footer\">
        {{ page.footer }}
      </div>
    {% endif %}
    {% if page.secondary_menu %}
      <div id=\"secondary-menu\">
        {{ page.secondary_menu }}
      </div>
    {% endif %}
  </div> <!-- end footer wrapper -->

  <div style=\"clear:both\"></div>

  <div id=\"notice\">
    <p>Theme by <a href=\"http://www.danetsoft.com\">Danetsoft</a> and <a href=\"http://www.danpros.com\">Danang Probo Sayekti</a> inspired by <a href=\"http://www.maksimer.no\">Maksimer</a></p>
  </div>
  
</div>";
    }
}
