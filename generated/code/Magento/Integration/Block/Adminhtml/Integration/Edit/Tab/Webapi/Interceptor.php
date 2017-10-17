<?php
namespace Magento\Integration\Block\Adminhtml\Integration\Edit\Tab\Webapi;

/**
 * Interceptor class for @see \Magento\Integration\Block\Adminhtml\Integration\Edit\Tab\Webapi
 */
class Interceptor extends \Magento\Integration\Block\Adminhtml\Integration\Edit\Tab\Webapi implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Framework\Acl\RootResource $rootResource, \Magento\Framework\Acl\AclResource\ProviderInterface $aclResourceProvider, \Magento\Integration\Helper\Data $integrationData, \Magento\Integration\Api\IntegrationServiceInterface $integrationService, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $rootResource, $aclResourceProvider, $integrationData, $integrationService, $data);
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
