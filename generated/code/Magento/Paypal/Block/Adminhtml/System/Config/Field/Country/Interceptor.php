<?php
namespace Magento\Paypal\Block\Adminhtml\System\Config\Field\Country;

/**
 * Interceptor class for @see \Magento\Paypal\Block\Adminhtml\System\Config\Field\Country
 */
class Interceptor extends \Magento\Paypal\Block\Adminhtml\System\Config\Field\Country implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Model\Url $url, \Magento\Framework\View\Helper\Js $jsHelper, \Magento\Directory\Helper\Data $directoryHelper, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $url, $jsHelper, $directoryHelper, $data);
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
