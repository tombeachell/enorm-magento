<?php
namespace Magento\ImportExport\Block\Adminhtml\Import\Edit\Before;

/**
 * Interceptor class for @see \Magento\ImportExport\Block\Adminhtml\Import\Edit\Before
 */
class Interceptor extends \Magento\ImportExport\Block\Adminhtml\Import\Edit\Before implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Json\EncoderInterface $jsonEncoder, \Magento\ImportExport\Model\Import $importModel, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $jsonEncoder, $importModel, $data);
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
