<?php
namespace Magento\Captcha\Block\Captcha;

/**
 * Interceptor class for @see \Magento\Captcha\Block\Captcha
 */
class Interceptor extends \Magento\Captcha\Block\Captcha implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Captcha\Helper\Data $captchaData, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $captchaData, $data);
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
