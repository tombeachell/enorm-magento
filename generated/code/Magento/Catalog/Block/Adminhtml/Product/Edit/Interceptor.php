<?php
namespace Magento\Catalog\Block\Adminhtml\Product\Edit;

/**
 * Interceptor class for @see \Magento\Catalog\Block\Adminhtml\Product\Edit
 */
class Interceptor extends \Magento\Catalog\Block\Adminhtml\Product\Edit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Json\EncoderInterface $jsonEncoder, \Magento\Eav\Model\Entity\Attribute\SetFactory $attributeSetFactory, \Magento\Framework\Registry $registry, \Magento\Catalog\Helper\Product $productHelper, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $jsonEncoder, $attributeSetFactory, $registry, $productHelper, $data);
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
