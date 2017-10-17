<?php
namespace Magento\Security\Block\Adminhtml\Session\Activity;

/**
 * Interceptor class for @see \Magento\Security\Block\Adminhtml\Session\Activity
 */
class Interceptor extends \Magento\Security\Block\Adminhtml\Session\Activity implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Security\Model\ConfigInterface $securityConfig, \Magento\Security\Model\AdminSessionsManager $sessionsManager, \Magento\Framework\HTTP\PhpEnvironment\RemoteAddress $remoteAddress)
    {
        $this->___init();
        parent::__construct($context, $securityConfig, $sessionsManager, $remoteAddress);
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
