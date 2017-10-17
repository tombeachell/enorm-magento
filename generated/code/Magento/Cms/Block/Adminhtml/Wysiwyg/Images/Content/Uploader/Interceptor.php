<?php
namespace Magento\Cms\Block\Adminhtml\Wysiwyg\Images\Content\Uploader;

/**
 * Interceptor class for @see \Magento\Cms\Block\Adminhtml\Wysiwyg\Images\Content\Uploader
 */
class Interceptor extends \Magento\Cms\Block\Adminhtml\Wysiwyg\Images\Content\Uploader implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\File\Size $fileSize, \Magento\Cms\Model\Wysiwyg\Images\Storage $imagesStorage, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $fileSize, $imagesStorage, $data);
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
