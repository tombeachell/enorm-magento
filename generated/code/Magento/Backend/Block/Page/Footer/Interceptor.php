<?php
namespace Magento\Backend\Block\Page\Footer;

/**
 * Interceptor class for @see \Magento\Backend\Block\Page\Footer
 */
class Interceptor extends \Magento\Backend\Block\Page\Footer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\App\ProductMetadataInterface $productMetadata, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $productMetadata, $data);
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
