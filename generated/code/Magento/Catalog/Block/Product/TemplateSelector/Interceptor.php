<?php
namespace Magento\Catalog\Block\Product\TemplateSelector;

/**
 * Interceptor class for @see \Magento\Catalog\Block\Product\TemplateSelector
 */
class Interceptor extends \Magento\Catalog\Block\Product\TemplateSelector implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Eav\Model\ResourceModel\Entity\Attribute\Set\CollectionFactory $setColFactory, \Magento\Framework\Registry $registry, \Magento\Catalog\Model\ResourceModel\Helper $resourceHelper, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $setColFactory, $registry, $resourceHelper, $data);
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
