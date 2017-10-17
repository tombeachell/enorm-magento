<?php
namespace Magento\Backend\Block\Media\Uploader;

/**
 * Interceptor class for @see \Magento\Backend\Block\Media\Uploader
 */
class Interceptor extends \Magento\Backend\Block\Media\Uploader implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\File\Size $fileSize, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $fileSize, $data);
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
