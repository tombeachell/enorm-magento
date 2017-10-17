<?php
namespace Magento\Backend\Block\Widget\Grid\Massaction\Extended;

/**
 * Interceptor class for @see \Magento\Backend\Block\Widget\Grid\Massaction\Extended
 */
class Interceptor extends \Magento\Backend\Block\Widget\Grid\Massaction\Extended implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Json\EncoderInterface $jsonEncoder, \Magento\Backend\Helper\Data $backendData, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $jsonEncoder, $backendData, $data);
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
