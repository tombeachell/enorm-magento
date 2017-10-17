<?php
namespace Magento\Sales\Block\Order\Comments;

/**
 * Interceptor class for @see \Magento\Sales\Block\Order\Comments
 */
class Interceptor extends \Magento\Sales\Block\Order\Comments implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Sales\Model\ResourceModel\Order\Invoice\Comment\CollectionFactory $invoiceCollectionFactory, \Magento\Sales\Model\ResourceModel\Order\Creditmemo\Comment\CollectionFactory $memoCollectionFactory, \Magento\Sales\Model\ResourceModel\Order\Shipment\Comment\CollectionFactory $shipmentCollectionFactory, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $invoiceCollectionFactory, $memoCollectionFactory, $shipmentCollectionFactory, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getModuleName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getModuleName');
        if (!$pluginInfo) {
            return parent::getModuleName();
        } else {
            return $this->___callPlugins('getModuleName', func_get_args(), $pluginInfo);
        }
    }
}
