<?php
namespace Magento\Shipping\Model\ShipmentNotifier;

/**
 * Interceptor class for @see \Magento\Shipping\Model\ShipmentNotifier
 */
class Interceptor extends \Magento\Shipping\Model\ShipmentNotifier implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Sales\Model\ResourceModel\Order\Status\History\CollectionFactory $historyCollectionFactory, \Psr\Log\LoggerInterface $logger, \Magento\Sales\Model\Order\Email\Sender\ShipmentSender $sender)
    {
        $this->___init();
        parent::__construct($historyCollectionFactory, $logger, $sender);
    }

    /**
     * {@inheritdoc}
     */
    public function afterSave()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterSave');
        if (!$pluginInfo) {
            return parent::afterSave();
        } else {
            return $this->___callPlugins('afterSave', func_get_args(), $pluginInfo);
        }
    }
}
