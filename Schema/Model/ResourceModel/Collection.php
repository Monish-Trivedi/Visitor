<?php 
namespace Visitor\Schema\Model\ResourceModel\Data;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection{
	public function _construct(){
		$this->_init("Visitor\Schema\Model\VisitorExample","Visitor\Schema\Model\ResourceModel\VisitorExample");
	}
}
 ?>