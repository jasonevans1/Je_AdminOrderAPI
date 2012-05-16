<?php
/**
 * API2 class for admin orders
 *
 * @category   AdminOrder
 * @package    Je_AdminOrderAPI
 * @author     Jason Evans(https://github.com/jasonevans1)
 */
class Je_AdminOrderAPI_Model_Api2_Order_Rest_Admin_V1 extends Je_AdminOrderAPI_Model_Api2_Order_Rest {

	/**
	 * Create product
	 *
	 * @param array $data
	 * @return string
	 */
	protected function _create(array $data) {
		Mage::log('Create Order Api Method');
		return $this->_getLocation($product);
	}
	
}