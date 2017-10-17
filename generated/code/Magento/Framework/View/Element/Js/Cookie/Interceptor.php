<?php
namespace Magento\Framework\View\Element\Js\Cookie;

/**
 * Interceptor class for @see \Magento\Framework\View\Element\Js\Cookie
 */
class Interceptor extends \Magento\Framework\View\Element\Js\Cookie implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Session\Config\ConfigInterface $cookieConfig, \Magento\Framework\Validator\Ip $ipValidator, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $cookieConfig, $ipValidator, $data);
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
