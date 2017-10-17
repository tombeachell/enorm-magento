<?php
namespace Magento\SalesRule\Block\Adminhtml\Promo\Quote\Edit\Tab\Actions;

/**
 * Interceptor class for @see \Magento\SalesRule\Block\Adminhtml\Promo\Quote\Edit\Tab\Actions
 */
class Interceptor extends \Magento\SalesRule\Block\Adminhtml\Promo\Quote\Edit\Tab\Actions implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Config\Model\Config\Source\Yesno $sourceYesno, \Magento\Rule\Block\Actions $ruleActions, \Magento\Backend\Block\Widget\Form\Renderer\Fieldset $rendererFieldset, array $data = array(), \Magento\SalesRule\Model\RuleFactory $ruleFactory = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $sourceYesno, $ruleActions, $rendererFieldset, $data, $ruleFactory);
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
