<?php
namespace Magento\GoogleAdwords\Block\Code;

/**
 * Interceptor class for @see \Magento\GoogleAdwords\Block\Code
 */
class Interceptor extends \Magento\GoogleAdwords\Block\Code implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\GoogleAdwords\Helper\Data $googleAdwordsData, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $googleAdwordsData, $data);
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
