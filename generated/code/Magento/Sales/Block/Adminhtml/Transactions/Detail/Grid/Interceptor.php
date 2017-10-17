<?php
namespace Magento\Sales\Block\Adminhtml\Transactions\Detail\Grid;

/**
 * Interceptor class for @see \Magento\Sales\Block\Adminhtml\Transactions\Detail\Grid
 */
class Interceptor extends \Magento\Sales\Block\Adminhtml\Transactions\Detail\Grid implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Helper\Data $backendHelper, \Magento\Framework\Data\CollectionFactory $collectionFactory, \Magento\Framework\Registry $coreRegistry, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $backendHelper, $collectionFactory, $coreRegistry, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function addColumn($columnId, $column)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addColumn');
        if (!$pluginInfo) {
            return parent::addColumn($columnId, $column);
        } else {
            return $this->___callPlugins('addColumn', func_get_args(), $pluginInfo);
        }
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
