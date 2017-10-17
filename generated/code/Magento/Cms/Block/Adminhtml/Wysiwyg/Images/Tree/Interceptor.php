<?php
namespace Magento\Cms\Block\Adminhtml\Wysiwyg\Images\Tree;

/**
 * Interceptor class for @see \Magento\Cms\Block\Adminhtml\Wysiwyg\Images\Tree
 */
class Interceptor extends \Magento\Cms\Block\Adminhtml\Wysiwyg\Images\Tree implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Cms\Helper\Wysiwyg\Images $cmsWysiwygImages, \Magento\Framework\Registry $registry, array $data = array(), \Magento\Framework\Serialize\Serializer\Json $serializer = null)
    {
        $this->___init();
        parent::__construct($context, $cmsWysiwygImages, $registry, $data, $serializer);
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
