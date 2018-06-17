<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Tests\TestCase;
use Behat\Behat\Tester\Exception\PendingException;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\User;
use Behat\Behat\Hook\Scope\BeforeScenarioScope;
use Behat\Behat\Hook\Scope\AfterScenarioScope;
use Illuminate\Contracts\Console\Kernel;


/**
 * Defines application features from the specific context.
 */
class FeatureContext extends TestCase implements Context
{
   use DatabaseMigrations;

    protected $content;

    /**

     * Initializes context.

     *

     * Every scenario gets its own context instance.

     * You can also pass arbitrary arguments to the

     * context constructor through behat.yml.

     */

    public function __construct()

    {

        putenv('DB_CONNECTION=sqlite');

        putenv('DB_DATABASE=:memory:');

        parent::setUp();

    }

    /** @BeforeScenario */

    public function before(BeforeScenarioScope $scope)

    {

        $this->artisan('migrate');

        $this->app[Kernel::class]->setArtisan(null);

    }

    /** @AfterScenario */

    public function after(AfterScenarioScope $scope)

    {

        throw new PendingException();

    }
    
    /**
     * @Given I am logged in as :arg1
     */
    public function iAmLoggedInAs($arg1)
    {
    	$response = $this->get('/');

        $this->assertEquals(200, $response->getStatusCode());

        $this->content = $response->getContent();
    }

    /**
     * @Given I visit the path :arg1
     */
    public function iVisitThePath($arg1)
    {
    }

    /**
     * @Then I should see the text :arg1
     */
    public function iShouldSeeTheText($arg1)
    {
    }
 
    
    
}
