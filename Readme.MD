Run 
    
    composer install
    
And then 

    vendor/bin/phpspec run
    
Will result in  

    ✘ Fatal error happened while executing the following                             1
        it can be segmented 
        Uncaught TypeError: Argument 1 passed to PhpSpec\Listener\CollaboratorMethodNotFoundListener::getDoubledInterface() must be of the type string, object given, called in /home/arie/NetBeansProjects/howaboutsales/development-docker/www/phpspec-issue/vendor/phpspec/phpspec/src/PhpSpec/Listener/CollaboratorMethodNotFoundListener.php on line 99 and defined in /home/arie/NetBeansProjects/howaboutsales/development-docker/www/phpspec-issue/vendor/phpspec/phpspec/src/PhpSpec/Listener/CollaboratorMethodNotFoundListener.php:116
    Stack trace:
    #0 /home/arie/NetBeansProjects/howaboutsales/development-docker/www/phpspec-issue/vendor/phpspec/phpspec/src/PhpSpec/Listener/CollaboratorMethodNotFoundListener.php(99): PhpSpec\Listener\CollaboratorMethodNotFoundListener->getDoubledInterface(Object(Prophecy\Prophecy\ObjectProphecy))
    #1 [internal function]: PhpSpec\Listener\CollaboratorMethodNotFoundListener->afterExample(Object(PhpSpec\Event\ExampleEvent), 'afterExample', Object(Symfony\Component\EventDispatcher\EventDispatcher))
    #2  in /home/arie/NetBeansProjects/howaboutsales/development-docker/www/phpspec-issue/vendor/phpspec/phpspec/src/PhpSpec/Listener/CollaboratorMethodNotFoundListener.php on line 116
    
    
Problem is that Segment as a collaborator is missing the 
$segment->forBusinessCycle($businessCycle) method implementation. 

So the collaborator object returns this error but it's not clear what the issue is.             