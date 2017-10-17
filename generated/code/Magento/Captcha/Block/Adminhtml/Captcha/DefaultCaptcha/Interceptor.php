<?php
namespace Magento\Captcha\Block\Adminhtml\Captcha\DefaultCaptcha;

/**
 * Interceptor class for @see \Magento\Captcha\Block\Adminhtml\Captcha\DefaultCaptcha
 */
class Interceptor extends \Magento\Captcha\Block\Adminhtml\Captcha\DefaultCaptcha implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Captcha\Helper\Data $captchaData, \Magento\Backend\Model\UrlInterface $url, \Magento\Backend\App\ConfigInterface $config, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $captchaData, $url, $config, $data);
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
