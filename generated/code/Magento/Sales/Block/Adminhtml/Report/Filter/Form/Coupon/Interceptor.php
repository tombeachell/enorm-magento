<?php
namespace Magento\Sales\Block\Adminhtml\Report\Filter\Form\Coupon;

/**
 * Interceptor class for @see \Magento\Sales\Block\Adminhtml\Report\Filter\Form\Coupon
 */
class Interceptor extends \Magento\Sales\Block\Adminhtml\Report\Filter\Form\Coupon implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Sales\Model\Order\ConfigFactory $orderConfig, \Magento\SalesRule\Model\ResourceModel\Report\RuleFactory $reportRule, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $orderConfig, $reportRule, $data);
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
