<?php
namespace Magento\Sales\Block\Adminhtml\Report\Filter\Form;

/**
 * Interceptor class for @see \Magento\Sales\Block\Adminhtml\Report\Filter\Form
 */
class Interceptor extends \Magento\Sales\Block\Adminhtml\Report\Filter\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Sales\Model\Order\ConfigFactory $orderConfig, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $orderConfig, $data);
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
