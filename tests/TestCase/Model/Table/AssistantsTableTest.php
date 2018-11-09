<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AssistantsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AssistantsTable Test Case
 */
class AssistantsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AssistantsTable
     */
    public $Assistants;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.assistants',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Assistants') ? [] : ['className' => AssistantsTable::class];
        $this->Assistants = TableRegistry::getTableLocator()->get('Assistants', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Assistants);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
