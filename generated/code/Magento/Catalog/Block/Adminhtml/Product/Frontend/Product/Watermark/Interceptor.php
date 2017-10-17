<?php
namespace Magento\Catalog\Block\Adminhtml\Product\Frontend\Product\Watermark;

/**
 * Interceptor class for @see \Magento\Catalog\Block\Adminhtml\Product\Frontend\Product\Watermark
 */
class Interceptor extends \Magento\Catalog\Block\Adminhtml\Product\Frontend\Product\Watermark implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Context $context, \Magento\Catalog\Model\Config\Source\Watermark\Position $watermarkPosition, \Magento\Config\Block\System\Config\Form\Field $formField, \Magento\Framework\Data\Form\Element\Factory $elementFactory, array $imageTypes = array(), array $data = array())
    {
        $this->___init();
        parent::__construct($context, $watermarkPosition, $formField, $elementFactory, $imageTypes, $data);
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
