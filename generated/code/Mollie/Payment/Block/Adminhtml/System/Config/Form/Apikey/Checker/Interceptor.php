<?php
namespace Mollie\Payment\Block\Adminhtml\System\Config\Form\Apikey\Checker;

/**
 * Interceptor class for @see \Mollie\Payment\Block\Adminhtml\System\Config\Form\Apikey\Checker
 */
class Interceptor extends \Mollie\Payment\Block\Adminhtml\System\Config\Form\Apikey\Checker implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, array $data = array())
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
