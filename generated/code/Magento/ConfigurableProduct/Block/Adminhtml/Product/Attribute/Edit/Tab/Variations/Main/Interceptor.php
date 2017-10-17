<?php
namespace Magento\ConfigurableProduct\Block\Adminhtml\Product\Attribute\Edit\Tab\Variations\Main;

/**
 * Interceptor class for @see \Magento\ConfigurableProduct\Block\Adminhtml\Product\Attribute\Edit\Tab\Variations\Main
 */
class Interceptor extends \Magento\ConfigurableProduct\Block\Adminhtml\Product\Attribute\Edit\Tab\Variations\Main implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Eav\Helper\Data $eavData, \Magento\Config\Model\Config\Source\YesnoFactory $yesnoFactory, \Magento\Eav\Model\Adminhtml\System\Config\Source\InputtypeFactory $inputTypeFactory, \Magento\Eav\Block\Adminhtml\Attribute\PropertyLocker $propertyLocker, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $eavData, $yesnoFactory, $inputTypeFactory, $propertyLocker, $data);
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
