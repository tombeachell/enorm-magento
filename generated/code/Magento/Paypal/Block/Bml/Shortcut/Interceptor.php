<?php
namespace Magento\Paypal\Block\Bml\Shortcut;

/**
 * Interceptor class for @see \Magento\Paypal\Block\Bml\Shortcut
 */
class Interceptor extends \Magento\Paypal\Block\Bml\Shortcut implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Payment\Helper\Data $paymentData, \Magento\Framework\Math\Random $mathRandom, \Magento\Paypal\Helper\Shortcut\ValidatorInterface $shortcutValidator, $paymentMethodCode, $startAction, $alias, $bmlMethodCode, $shortcutTemplate, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $paymentData, $mathRandom, $shortcutValidator, $paymentMethodCode, $startAction, $alias, $bmlMethodCode, $shortcutTemplate, $data);
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
