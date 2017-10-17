<?php
namespace Magento\Weee\Block\Sales\Order\Totals;

/**
 * Interceptor class for @see \Magento\Weee\Block\Sales\Order\Totals
 */
class Interceptor extends \Magento\Weee\Block\Sales\Order\Totals implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Weee\Helper\Data $weeeData, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $weeeData, $data);
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
