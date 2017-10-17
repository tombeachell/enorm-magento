<?php
namespace Magento\ImportExport\Block\Adminhtml\Export\Filter;

/**
 * Interceptor class for @see \Magento\ImportExport\Block\Adminhtml\Export\Filter
 */
class Interceptor extends \Magento\ImportExport\Block\Adminhtml\Export\Filter implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Helper\Data $backendHelper, \Magento\ImportExport\Helper\Data $importExportData, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $backendHelper, $importExportData, $data);
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
