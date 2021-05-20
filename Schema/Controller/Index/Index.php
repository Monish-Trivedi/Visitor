<?php 
namespace Visitor\Schema\Controller\Index;
use Visitor\Schema\Model\DataFactory;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Context;
class Index extends \Magento\Framework\App\Action\Action{
    protected $_VisitorExample;
    protected $resultRedirect;
    public function __construct(\Magento\Framework\App\Action\Context $context,
        \Visitor\Schema\Model\VisitorExampleFactory  $VisitorExample,
    \Magento\Framework\Controller\ResultFactory $result){
        parent::__construct($context);
        $this->VisitorExample = $VisitorExample;
        $this->resultRedirect = $result;
    }
	public function execute(){
        $resultRedirect = $this->resultRedirect->create(ResultFactory::TYPE_REDIRECT);
        $resultRedirect->setUrl($this->_redirect->getRefererUrl());
		$model = $this->VisitorExample->create();
		$model->addData([
			"name" => 'MonishTrivedi',
			"email" => 'monish.trivedi@krishtechnolabs.com'			
			]);
        $saveData = $model->save();
        if($saveData){
            $this->messageManager->addSuccess( __('Insert Record Successfully !') );
        }
		return $resultRedirect;
	}
}
 ?>