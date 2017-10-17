<?php
namespace Magento\Customer\Block\Adminhtml\Edit\Tab\View\Sales;

/**
 * Interceptor class for @see \Magento\Customer\Block\Adminhtml\Edit\Tab\View\Sales
 */
class Interceptor extends \Magento\Customer\Block\Adminhtml\Edit\Tab\View\Sales implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Directory\Model\CurrencyFactory $currencyFactory, \Magento\Sales\Model\ResourceModel\Sale\CollectionFactory $collectionFactory, \Magento\Framework\Registry $coreRegistry, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $currencyFactory, $collectionFactory, $coreRegistry, $data);
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
