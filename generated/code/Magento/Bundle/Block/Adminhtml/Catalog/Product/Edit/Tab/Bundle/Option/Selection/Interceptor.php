<?php
namespace Magento\Bundle\Block\Adminhtml\Catalog\Product\Edit\Tab\Bundle\Option\Selection;

/**
 * Interceptor class for @see \Magento\Bundle\Block\Adminhtml\Catalog\Product\Edit\Tab\Bundle\Option\Selection
 */
class Interceptor extends \Magento\Bundle\Block\Adminhtml\Catalog\Product\Edit\Tab\Bundle\Option\Selection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Config\Model\Config\Source\Yesno $yesno, \Magento\Bundle\Model\Source\Option\Selection\Price\Type $priceType, \Magento\Catalog\Helper\Data $catalogData, \Magento\Framework\Registry $registry, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $yesno, $priceType, $catalogData, $registry, $data);
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
