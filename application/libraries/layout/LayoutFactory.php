<?php
namespace libraries\layout;
use libraries\layout\Main;
use libraries\layout\MainAdmin;
class LayoutFactory {
	CONST MAIN = 'MAIN';
	CONST MAIN_DETAIL = 'MAIN_DETAIL';
	CONST MAIN_BLANK = "MAIN_BLANK";
	CONST MAIN_ADMIN = "MAIN_ADMIN";
	
	/**
	 * get template render.
	 *
	 * @param unknown $templateName        	
	 * @throws Exception
	 * @return AbstractLayout
	 */
	static function getLayout($templateName = self::MAIN) {
		switch ($templateName) {
			case self::MAIN :
				return new Main ();
				break;
			case self::MAIN_ADMIN :
				return new MainAdmin ();
				break;
			default :
				throw new \Exception( 'Template not supported' );
				break;
		}
	}
}
