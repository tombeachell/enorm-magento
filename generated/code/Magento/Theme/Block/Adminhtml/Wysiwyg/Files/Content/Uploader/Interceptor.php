<?php
namespace Magento\Theme\Block\Adminhtml\Wysiwyg\Files\Content\Uploader;

/**
 * Interceptor class for @see \Magento\Theme\Block\Adminhtml\Wysiwyg\Files\Content\Uploader
 */
class Interceptor extends \Magento\Theme\Block\Adminhtml\Wysiwyg\Files\Content\Uploader implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\File\Size $fileSize, \Magento\Theme\Helper\Storage $storageHelper, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $fileSize, $storageHelper, $data);
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
