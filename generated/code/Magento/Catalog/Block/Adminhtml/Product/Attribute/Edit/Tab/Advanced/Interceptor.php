<?php
namespace Magento\Catalog\Block\Adminhtml\Product\Attribute\Edit\Tab\Advanced;

/**
 * Interceptor class for @see \Magento\Catalog\Block\Adminhtml\Product\Attribute\Edit\Tab\Advanced
 */
class Interceptor extends \Magento\Catalog\Block\Adminhtml\Product\Attribute\Edit\Tab\Advanced implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Config\Model\Config\Source\Yesno $yesNo, \Magento\Eav\Helper\Data $eavData, array $disableScopeChangeList = array('sku'), array $data = array())
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $yesNo, $eavData, $disableScopeChangeList, $data);
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
