<?php 
namespace Visitor\Schema\Model\ResourceModel;
class VisitorExample extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb{
 public function _construct(){
 $this->_init("visitor_example","id");
 }
}
 ?>