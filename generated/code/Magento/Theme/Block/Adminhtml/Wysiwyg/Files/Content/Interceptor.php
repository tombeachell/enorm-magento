<?php
namespace Magento\Theme\Block\Adminhtml\Wysiwyg\Files\Content;

/**
 * Interceptor class for @see \Magento\Theme\Block\Adminhtml\Wysiwyg\Files\Content
 */
class Interceptor extends \Magento\Theme\Block\Adminhtml\Wysiwyg\Files\Content implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Widget\Context $context, \Magento\Theme\Helper\Storage $storageHelper, \Magento\Framework\Json\Helper\Data $jsonHelper, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $storageHelper, $jsonHelper, $data);
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
