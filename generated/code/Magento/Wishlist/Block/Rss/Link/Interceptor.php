<?php
namespace Magento\Wishlist\Block\Rss\Link;

/**
 * Interceptor class for @see \Magento\Wishlist\Block\Rss\Link
 */
class Interceptor extends \Magento\Wishlist\Block\Rss\Link implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Wishlist\Helper\Data $wishlistHelper, \Magento\Framework\App\Rss\UrlBuilderInterface $rssUrlBuilder, \Magento\Framework\Url\EncoderInterface $urlEncoder, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $wishlistHelper, $rssUrlBuilder, $urlEncoder, $data);
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
