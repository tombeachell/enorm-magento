<?php
namespace Magento\Wishlist\Block\Customer\Wishlist\Button;

/**
 * Interceptor class for @see \Magento\Wishlist\Block\Customer\Wishlist\Button
 */
class Interceptor extends \Magento\Wishlist\Block\Customer\Wishlist\Button implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Wishlist\Helper\Data $wishlistData, \Magento\Wishlist\Model\Config $wishlistConfig, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $wishlistData, $wishlistConfig, $data);
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
