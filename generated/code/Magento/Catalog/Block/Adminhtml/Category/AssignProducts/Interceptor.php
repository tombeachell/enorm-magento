<?php
namespace Magento\Catalog\Block\Adminhtml\Category\AssignProducts;

/**
 * Interceptor class for @see \Magento\Catalog\Block\Adminhtml\Category\AssignProducts
 */
class Interceptor extends \Magento\Catalog\Block\Adminhtml\Category\AssignProducts implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Json\EncoderInterface $jsonEncoder, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $registry, $jsonEncoder, $data);
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
