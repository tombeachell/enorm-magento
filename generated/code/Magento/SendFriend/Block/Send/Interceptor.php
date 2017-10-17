<?php
namespace Magento\SendFriend\Block\Send;

/**
 * Interceptor class for @see \Magento\SendFriend\Block\Send
 */
class Interceptor extends \Magento\SendFriend\Block\Send implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Customer\Model\Session $customerSession, \Magento\SendFriend\Helper\Data $sendfriendData, \Magento\Framework\Registry $registry, \Magento\Customer\Helper\View $customerViewHelper, \Magento\Framework\App\Http\Context $httpContext, \Magento\SendFriend\Model\SendFriend $sendfriend, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $customerSession, $sendfriendData, $registry, $customerViewHelper, $httpContext, $sendfriend, $data);
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
