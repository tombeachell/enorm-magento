<?php
namespace Magento\GoogleOptimizer\Block\Adminhtml\Catalog\Product\Edit\Tab\Googleoptimizer;

/**
 * Interceptor class for @see \Magento\GoogleOptimizer\Block\Adminhtml\Catalog\Product\Edit\Tab\Googleoptimizer
 */
class Interceptor extends \Magento\GoogleOptimizer\Block\Adminhtml\Catalog\Product\Edit\Tab\Googleoptimizer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\GoogleOptimizer\Helper\Data $helperData, \Magento\Framework\Registry $registry, \Magento\GoogleOptimizer\Helper\Code $codeHelper, \Magento\GoogleOptimizer\Helper\Form $formHelper, \Magento\Framework\Data\FormFactory $formFactory, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $helperData, $registry, $codeHelper, $formHelper, $formFactory, $data);
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
