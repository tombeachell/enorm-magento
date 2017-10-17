<?php
namespace Magento\CatalogWidget\Block\Product\Widget\Conditions;

/**
 * Interceptor class for @see \Magento\CatalogWidget\Block\Product\Widget\Conditions
 */
class Interceptor extends \Magento\CatalogWidget\Block\Product\Widget\Conditions implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Data\Form\Element\Factory $elementFactory, \Magento\Rule\Block\Conditions $conditions, \Magento\CatalogWidget\Model\Rule $rule, \Magento\Framework\Registry $registry, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $elementFactory, $conditions, $rule, $registry, $data);
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
