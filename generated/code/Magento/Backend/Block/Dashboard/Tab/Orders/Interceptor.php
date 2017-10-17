<?php
namespace Magento\Backend\Block\Dashboard\Tab\Orders;

/**
 * Interceptor class for @see \Magento\Backend\Block\Dashboard\Tab\Orders
 */
class Interceptor extends \Magento\Backend\Block\Dashboard\Tab\Orders implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Reports\Model\ResourceModel\Order\CollectionFactory $collectionFactory, \Magento\Backend\Helper\Dashboard\Data $dashboardData, \Magento\Backend\Helper\Dashboard\Order $dataHelper, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $collectionFactory, $dashboardData, $dataHelper, $data);
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
