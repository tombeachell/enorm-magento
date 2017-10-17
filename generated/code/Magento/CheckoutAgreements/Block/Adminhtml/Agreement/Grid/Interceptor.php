<?php
namespace Magento\CheckoutAgreements\Block\Adminhtml\Agreement\Grid;

/**
 * Interceptor class for @see \Magento\CheckoutAgreements\Block\Adminhtml\Agreement\Grid
 */
class Interceptor extends \Magento\CheckoutAgreements\Block\Adminhtml\Agreement\Grid implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Helper\Data $backendHelper, \Magento\CheckoutAgreements\Model\ResourceModel\Agreement\CollectionFactory $collectionFactory, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $backendHelper, $collectionFactory, $data);
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
