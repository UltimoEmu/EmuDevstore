<?php
/**
* WoltLab Community Framework
* Template: captcha
* Compiled at: Sat, 17 Aug 2013 09:22:34 +0000
* 
* DO NOT EDIT THIS FILE
*/
$this->v['tpl']['template'] = 'captcha';
?>
<?php if ( ! isset($this->v['enableFieldset'])) { ?><?php $this->assign('enableFieldset', true); ?><?php } ?>
<?php if ($this->v['captchaID']) { ?>
	<?php if ($this->v['enableFieldset']) { ?><fieldset>
		<legend>Security measure</legend>
	<?php } ?>
		<div class="formElement<?php if ($this->v['errorField'] == 'captchaString') { ?> formError<?php } ?>">
			<div class="formFieldLabel">
				<label for="captchaString">Security code</label>
			</div>
			<div class="formField">
				<input type="text" class="inputText" name="captchaString" value="" id="captchaString" />
				<?php if ($this->v['errorField'] == 'captchaString') { ?>
					<p class="innerError">
						<?php if ($this->v['errorType'] == 'empty') { ?>Please enter the required information for this field.<?php } ?>
						<?php if ($this->v['errorType'] == 'false') { ?>You have entered the security code incorrectly. Please try again.<?php } ?>
					</p>
				<?php } ?>
			</div>
			<div class="formFieldDesc">
				<p>Please enter the letters that are shown in the picture below (without spaces, and upper or lower case can be used). If you cannot identify the captcha even after reloading it please contact the administrator of this site.</p>
				<img id="captchaImage" src="index.php?page=Captcha&amp;captchaID=<?php echo $this->v['captchaID']; ?><?php echo SID_ARG_2ND; ?>" alt="" />
			</div>
			
			<input type="hidden" id="captchaID" name="captchaID" value="<?php echo $this->v['captchaID']; ?>" />
			
			<script type="text/javascript">
				//<![CDATA[
				var captchaLanguage = new Object();
				captchaLanguage['wcf.captcha.reload'] = 'Reload captcha image';
				captchaLanguage['wcf.captcha.minimize'] = 'Decrease image size';
				captchaLanguage['wcf.captcha.maximize'] = 'Increase image size';
				//]]>
			</script>
			<script type="text/javascript" src="<?php echo RELATIVE_WCF_DIR; ?>js/Captcha.class.js"></script>
		</div>
	<?php if ($this->v['enableFieldset']) { ?></fieldset><?php } ?>
<?php } ?>