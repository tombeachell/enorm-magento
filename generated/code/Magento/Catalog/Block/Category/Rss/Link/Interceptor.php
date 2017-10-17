<?php
namespace Magento\Catalog\Block\Category\Rss\Link;

/**
 * Interceptor class for @see \Magento\Catalog\Block\Category\Rss\Link
 */
class Interceptor extends \Magento\Catalog\Block\Category\Rss\Link implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\App\Rss\UrlBuilderInterface $rssUrlBuilder, \Magento\Framework\Registry $registry, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $rssUrlBuilder, $registry, $data);
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
