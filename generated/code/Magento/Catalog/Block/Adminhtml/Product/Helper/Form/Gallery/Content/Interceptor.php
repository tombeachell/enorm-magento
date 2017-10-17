<?php
namespace Magento\Catalog\Block\Adminhtml\Product\Helper\Form\Gallery\Content;

/**
 * Interceptor class for @see \Magento\Catalog\Block\Adminhtml\Product\Helper\Form\Gallery\Content
 */
class Interceptor extends \Magento\Catalog\Block\Adminhtml\Product\Helper\Form\Gallery\Content implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Json\EncoderInterface $jsonEncoder, \Magento\Catalog\Model\Product\Media\Config $mediaConfig, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $jsonEncoder, $mediaConfig, $data);
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
