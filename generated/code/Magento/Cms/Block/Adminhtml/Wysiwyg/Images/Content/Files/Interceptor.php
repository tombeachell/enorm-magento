<?php
namespace Magento\Cms\Block\Adminhtml\Wysiwyg\Images\Content\Files;

/**
 * Interceptor class for @see \Magento\Cms\Block\Adminhtml\Wysiwyg\Images\Content\Files
 */
class Interceptor extends \Magento\Cms\Block\Adminhtml\Wysiwyg\Images\Content\Files implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Cms\Model\Wysiwyg\Images\Storage $imageStorage, \Magento\Cms\Helper\Wysiwyg\Images $imageHelper, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $imageStorage, $imageHelper, $data);
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
