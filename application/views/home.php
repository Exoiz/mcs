<?php echo modules::run('_main/top'); ?>

<div class="header">CodeIgniter MCS Extension Basic</div>
<div class="links">
	<a href="<?php echo url(); ?>en/home">English</a>&nbsp;|&nbsp;<a href="<?php echo url(''); ?>fr/home">French</a>
</div>
<div class="content"><?php echo lang("hello"); ?>!</div>
<div class="text">Code to create dynamic links:</div>
<div class="code">
	<p>&lt;?php <span class="fn0">echo</span> <span class="fn0">url</span><span class="br0">(</span><span class="st0">'home'</span><span class="br0">)</span>; ?&gt;</p>
</div>
<div class="example">Example: <a href="<?php echo url('home'); ?>"><?php echo url('home'); ?></a></div>
<div class="footer">
	<div class="footer-text">For more releases please visit <a target="_blank" href="http://www.exoiz.com">www.exoiz.com</a></div>
</div>
	
<?php echo modules::run('_main/bottom'); ?>