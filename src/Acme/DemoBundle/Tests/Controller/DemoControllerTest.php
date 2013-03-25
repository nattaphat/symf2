<?php

namespace Acme\DemoBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DemoControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/demo/hello/Fabien');

        $this->assertGreaterThan(0, $crawler->filter('html:contains("Hello Fabien")')->count());
        
        /*
         * Click on a link by first selecting it with the Crawler using either an 
         * XPath expression or a CSS selector, then use the Client to click on it. 
         * For example, the following code finds all links with the text Greet, 
         * then selects the second one, and ultimately clicks on it:
         * */
        $link = $crawler->filter('a:contains("Greet")')->eq(1)->link();
        
        $crawler = $client->click($link);
        
        
        /*
         * Submitting a form is very similar; select a form button, optionally 
         * override some form values, and submit the corresponding form:
         * */
        $form = $crawler->selectButton('submit')->form();
        
        // set some values
        $form['name'] = 'Lucas';
        $form['form_name[subject]'] = 'Hey there!';
        
        // submit the form
        $crawler = $client->submit($form);
        
        /*
         * Now that you can easily navigate through an application, use assertions to test that it actually
         * does what you expect it to. Use the Crawler to make assertions on the DOM:
         * */
        // Assert that the response matches a given CSS selector.
        $this->assertGreaterThan(0, $crawler->filter('h1')->count());
        
        /*Or, test against the Response content directly if you just want to assert that the content contains some text, 
         *or if the Response is not an XML/HTML document:
         * */
        $this->assertRegExp(
                '/Hello Fabien/',
                $client->getResponse()->getContent()
        );
    }
}
