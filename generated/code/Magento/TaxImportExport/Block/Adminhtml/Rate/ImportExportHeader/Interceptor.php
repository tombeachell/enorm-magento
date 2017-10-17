<?php
namespace Magento\TaxImportExport\Block\Adminhtml\Rate\ImportExportHeader;

/**
 * Interceptor class for @see \Magento\TaxImportExport\Block\Adminhtml\Rate\ImportExportHeader
 */
class Interceptor extends \Magento\TaxImportExport\Block\Adminhtml\Rate\ImportExportHeader implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $data);
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
