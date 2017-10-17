<?php
namespace Magento\Reports\Block\Adminhtml\Sales\Coupons\Grid;

/**
 * Interceptor class for @see \Magento\Reports\Block\Adminhtml\Sales\Coupons\Grid
 */
class Interceptor extends \Magento\Reports\Block\Adminhtml\Sales\Coupons\Grid implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Helper\Data $backendHelper, \Magento\Reports\Model\ResourceModel\Report\Collection\Factory $resourceFactory, \Magento\Reports\Model\Grouped\CollectionFactory $collectionFactory, \Magento\Reports\Helper\Data $reportsData, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $backendHelper, $resourceFactory, $collectionFactory, $reportsData, $data);
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
