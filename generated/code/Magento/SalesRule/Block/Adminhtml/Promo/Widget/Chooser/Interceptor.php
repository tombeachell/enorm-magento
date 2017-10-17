<?php
namespace Magento\SalesRule\Block\Adminhtml\Promo\Widget\Chooser;

/**
 * Interceptor class for @see \Magento\SalesRule\Block\Adminhtml\Promo\Widget\Chooser
 */
class Interceptor extends \Magento\SalesRule\Block\Adminhtml\Promo\Widget\Chooser implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Helper\Data $backendHelper, \Magento\SalesRule\Model\RuleFactory $ruleFactory, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $backendHelper, $ruleFactory, $data);
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
