<?php
namespace Magento\User\Block\User\Edit\Tab\Roles;

/**
 * Interceptor class for @see \Magento\User\Block\User\Edit\Tab\Roles
 */
class Interceptor extends \Magento\User\Block\User\Edit\Tab\Roles implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Helper\Data $backendHelper, \Magento\Framework\Json\EncoderInterface $jsonEncoder, \Magento\Authorization\Model\ResourceModel\Role\CollectionFactory $userRolesFactory, \Magento\Framework\Registry $coreRegistry, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $backendHelper, $jsonEncoder, $userRolesFactory, $coreRegistry, $data);
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
