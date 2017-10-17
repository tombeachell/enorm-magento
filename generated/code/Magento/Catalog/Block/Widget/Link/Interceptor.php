<?php
namespace Magento\Catalog\Block\Widget\Link;

/**
 * Interceptor class for @see \Magento\Catalog\Block\Widget\Link
 */
class Interceptor extends \Magento\Catalog\Block\Widget\Link implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\UrlRewrite\Model\UrlFinderInterface $urlFinder, \Magento\Catalog\Model\ResourceModel\AbstractResource $entityResource = null, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $urlFinder, $entityResource, $data);
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
