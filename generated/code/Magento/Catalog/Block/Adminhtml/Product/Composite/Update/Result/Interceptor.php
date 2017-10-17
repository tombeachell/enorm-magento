<?php
namespace Magento\Catalog\Block\Adminhtml\Product\Composite\Update\Result;

/**
 * Interceptor class for @see \Magento\Catalog\Block\Adminhtml\Product\Composite\Update\Result
 */
class Interceptor extends \Magento\Catalog\Block\Adminhtml\Product\Composite\Update\Result implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Json\EncoderInterface $jsonEncoder, \Magento\Framework\View\Helper\Js $jsHelper, \Magento\Framework\Registry $registry, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $jsonEncoder, $jsHelper, $registry, $data);
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
