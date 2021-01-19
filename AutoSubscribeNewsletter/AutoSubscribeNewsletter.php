// Add a new dependency in constructor of block, controller, model etc
protected $subscriberFactory;

public function __construct(

\Magento\Newsletter\Model\SubscriberFactory $subscriberFactory,
) {
    $this->subscriberFactory= $subscriberFactory;

}

// Use below code anywhere in same classes function to autosubscribe
$this->subscriberFactory->create()->subscribe($email);
