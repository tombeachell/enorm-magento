<?php
namespace Magento\Msrp\Block\Total;

/**
 * Interceptor class for @see \Magento\Msrp\Block\Total
 */
class Interceptor extends \Magento\Msrp\Block\Total implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Msrp\Model\Config $config, \Magento\Msrp\Model\Quote\Msrp $msrp, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $config, $msrp, $data);
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
