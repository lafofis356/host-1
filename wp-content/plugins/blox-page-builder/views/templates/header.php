<?php
/**
 * @package Blox Page Builder
 * @author UniteCMS.net
 * @copyright (C) 2017 Unite CMS, All Rights Reserved. 
 * @license GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 * */
defined('BLOXBUILDER_INC') or die('Restricted access');
	
	if(!isset($headerTitle))
		UniteFunctionsUC::throwError("header template error: \$headerTitle variable not defined"); 
		
	$headerPrefix = HelperUC::getText("addon_library");
	if(!empty(GlobalsUC::$alterViewHeaderPrefix))
		$headerPrefix = GlobalsUC::$alterViewHeaderPrefix;

	$adminPageTitle = $headerTitle ." - " . $headerPrefix;
	UniteProviderFunctionsUC::setAdminPageTitle($adminPageTitle);
	
?>
		
		<div class="unite_header_wrapper">
			
			<div class="title_line">
				<div class="title_line_text">
					<?php echo $headerPrefix." - " . $headerTitle ?>
				</div>
				<?php if(isset($headerAddHtml)): ?>
				<div class="title_line_add_html"><?php echo $headerAddHtml;?></div>
				<?php endif?>
			</div>
			<div class="unite-clear"></div>
		</div>
		
		<?php HelperHtmlUC::putHtmlAdminNotices()?>		