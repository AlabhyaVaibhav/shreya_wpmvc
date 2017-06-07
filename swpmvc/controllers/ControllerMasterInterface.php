<?php
/**
 * This interface provides 4 functions. fn_get_header(),fn_get_footer(),fn_get_content() and fn_construct_class() 
 * All classes must implement this interface for the ease of accessing and manging content across pages.
 */
interface ControllerMasterInterface {
	
	/**
	 * All Page Controller class must implement this function. This function gets called when Router creates object from a Controller Class and calls this function for initial setup to build a page.
	 *
	 */
	public function fn_construct_class();
	
	/**
	 * All Page Controller class must implement this function. This function returns the string containing html for the Header section of a page.
	 *  
	 */
	public function fn_get_header();
	
	/**
	 * All Page Controller class must implement this function. This function returns the string containing html for the Content section of a page.
	 * 
	 */
	public function fn_get_content();
	
	/**
	 * All Page Controller class must implement this function. This function returns the string containing html for the Footer section of a page.
	 * 
	 */
	public function fn_get_footer();	
}
