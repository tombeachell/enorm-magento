<?php
namespace Magento\Sales\Block\Order\Recent;

/**
 * Interceptor class for @see \Magento\Sales\Block\Order\Recent
 */
class Interceptor extends \Magento\Sales\Block\Order\Recent implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Sales\Model\ResourceModel\Order\CollectionFactory $orderCollectionFactory, \Magento\Customer\Model\Session $customerSession, \Magento\Sales\Model\Order\Config $orderConfig, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $orderCollectionFactory, $customerSession, $orderConfig, $data);
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
