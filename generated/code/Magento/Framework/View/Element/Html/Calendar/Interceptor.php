<?php
namespace Magento\Framework\View\Element\Html\Calendar;

/**
 * Interceptor class for @see \Magento\Framework\View\Element\Html\Calendar
 */
class Interceptor extends \Magento\Framework\View\Element\Html\Calendar implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Stdlib\DateTime\DateTime $date, \Magento\Framework\Json\EncoderInterface $encoder, \Magento\Framework\Locale\ResolverInterface $localeResolver, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $date, $encoder, $localeResolver, $data);
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
