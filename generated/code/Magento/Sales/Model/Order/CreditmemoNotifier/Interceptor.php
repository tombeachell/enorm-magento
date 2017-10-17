<?php
namespace Magento\Sales\Model\Order\CreditmemoNotifier;

/**
 * Interceptor class for @see \Magento\Sales\Model\Order\CreditmemoNotifier
 */
class Interceptor extends \Magento\Sales\Model\Order\CreditmemoNotifier implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Sales\Model\ResourceModel\Order\Status\History\CollectionFactory $historyCollectionFactory, \Psr\Log\LoggerInterface $logger, \Magento\Sales\Model\Order\Email\Sender\CreditmemoSender $sender)
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
