<?php
namespace Magento\GoogleOptimizer\Block\Adminhtml\Form;

/**
 * Interceptor class for @see \Magento\GoogleOptimizer\Block\Adminhtml\Form
 */
class Interceptor extends \Magento\GoogleOptimizer\Block\Adminhtml\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\GoogleOptimizer\Helper\Form $formHelper, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $formHelper, $data);
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
