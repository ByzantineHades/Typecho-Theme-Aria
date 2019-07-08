<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
        </div><!-- end .row -->
    </div><!-- end .container -->
</div><!-- end #body -->
</div><!-- end #pjax-container -->
<!-- div id="go-top" onclick="goTop(this);" ><img no-lazyload src="https://typecho-1252071452.cos.ap-beijing.myqcloud.com/img/goTop.png'); ?>"><div id="scroll-percentage"></div></div-->
<footer id="footer" role="contentinfo">
    <?php $this->options->customFooter(); ?>
    <?php if(Utils::isEnabled('showHitokoto','AriaConfig')): ?><p id="hitokoto"></p><?php endif; ?>
    <p id="footer-info">&copy; <span><?php echo $this->options->cpr ? $this->options->cpr : date('Y'); ?></span><?php Utils::getFooterWidget(); ?></p>
</footer><!-- end #footer -->
<?php if(Utils::isEnabled('enablePjax','AriaConfig')): ?>
<script src="https://typecho-1252071452.cos.ap-beijing.myqcloud.com/js/jquery.pjax.min.js"></script>
<?php endif; ?>
<?php if(Utils::isEnabled('enableFancybox','AriaConfig')): ?>
<script src="https://typecho-1252071452.cos.ap-beijing.myqcloud.com/js/jquery.fancybox.min.js"></script>
<?php endif; ?>
<script src="https://typecho-1252071452.cos.ap-beijing.myqcloud.com/js/highlight.min.js"></script>
<?php if(Utils::isEnabled('enableLazyload','AriaConfig')): ?>
<script src="https://typecho-1252071452.cos.ap-beijing.myqcloud.com/js/jquery.lazyload.min.js"></script>
<?php endif; ?>
<script src="https://typecho-1252071452.cos.ap-beijing.myqcloud.com/OwO/OwO.min.js"></script>
<?php if(Utils::isEnabled('enableMathJax','AriaConfig')): ?>
<script type="text/x-mathjax-config"><?php $this->options->MathJaxConfig(); ?></script>
<script src="//cdn.jsdelivr.net/npm/mathjax@latest/MathJax.js?config=TeX-AMS-MML_SVG.js"></script>
<?php endif; ?>
<script src="https://typecho-1252071452.cos.ap-beijing.myqcloud.com/js/functions.min.js?v=8b426df9ab"></script>
<script src="https://typecho-1252071452.cos.ap-beijing.myqcloud.com/js/main.min.js?v=de446d9d66"></script>
<?php echo $this->options->customScript ? "<script>".$this->options->customScript."</script>\n" : ""; ?>
<?php if($this->options->statistics) $this->options->statistics(); ?>
<?php $this->footer(); ?>
<!--FireworkSTART-->
<div id="divfirework"><canvas id="canvasfirework" ></canvas></div>
<link rel="stylesheet" type="text/css" href="https://typecho-1252071452.cos.ap-beijing.myqcloud.com/css/firework.css">
<script src= "https://typecho-1252071452.cos.ap-beijing.myqcloud.com/js/firework.js"></script>
<!--FireworkEND-->

<!-- L2dSTART -->
<!-- 实现拖动效果，需引入 JQuery UI -->
<script src="https://typecho-1252071452.cos.ap-beijing.myqcloud.com/js/jquery-ui.js?v=1.12.1"></script>
<!-- 使用 aotuload.js 引入看板娘 -->
<script src="https://typecho-1252071452.cos.ap-beijing.myqcloud.com/js/waifu-autoload.js?v=1.4.2"></script>
<!-- L2dEND -->
<!-- Your XlchPlayerKey -->
<script>XlchKey="ByHa";</script>
<!-- JQuery-mousewheel 3.1.9 -->
<script src="https://lib.baomitu.com/jquery-mousewheel/3.1.9/jquery.mousewheel.min.js"></script>
<!-- Scrollbar -->
<script src="https://static.https.badapple.top/BadApplePlayer/js/scrollbar.js"></script>
<!-- BadApplePlayer -->
<script src="https://static.https.badapple.top/BadApplePlayer/Player.js"></script>
<script src="https://typecho-1252071452.cos.ap-beijing.myqcloud.com/js/Setting.js"></script>
</body>
</html>
