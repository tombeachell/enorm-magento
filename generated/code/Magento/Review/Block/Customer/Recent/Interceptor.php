<?php
namespace Magento\Review\Block\Customer\Recent;

/**
 * Interceptor class for @see \Magento\Review\Block\Customer\Recent
 */
class Interceptor extends \Magento\Review\Block\Customer\Recent implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Review\Model\ResourceModel\Review\Product\CollectionFactory $collectionFactory, \Magento\Customer\Helper\Session\CurrentCustomer $currentCustomer, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $collectionFactory, $currentCustomer, $data);
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
