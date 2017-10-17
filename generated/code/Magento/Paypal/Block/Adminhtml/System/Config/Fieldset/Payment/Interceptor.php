<?php
namespace Magento\Paypal\Block\Adminhtml\System\Config\Fieldset\Payment;

/**
 * Interceptor class for @see \Magento\Paypal\Block\Adminhtml\System\Config\Fieldset\Payment
 */
class Interceptor extends \Magento\Paypal\Block\Adminhtml\System\Config\Fieldset\Payment implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Context $context, \Magento\Backend\Model\Auth\Session $authSession, \Magento\Framework\View\Helper\Js $jsHelper, \Magento\Config\Model\Config $backendConfig, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $authSession, $jsHelper, $backendConfig, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function render(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'render');
        if (!$pluginInfo) {
            return parent::render($element);
        } else {
            return $this->___callPlugins('render', func_get_args(), $pluginInfo);
        }
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
