<?php
namespace Magento\Backend\Block\Dashboard\Graph;

/**
 * Interceptor class for @see \Magento\Backend\Block\Dashboard\Graph
 */
class Interceptor extends \Magento\Backend\Block\Dashboard\Graph implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Reports\Model\ResourceModel\Order\CollectionFactory $collectionFactory, \Magento\Backend\Helper\Dashboard\Data $dashboardData, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $collectionFactory, $dashboardData, $data);
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
