<?php
namespace Magento\OfflinePayments\Block\Form\Cashondelivery;

/**
 * Interceptor class for @see \Magento\OfflinePayments\Block\Form\Cashondelivery
 */
class Interceptor extends \Magento\OfflinePayments\Block\Form\Cashondelivery implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $data);
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
