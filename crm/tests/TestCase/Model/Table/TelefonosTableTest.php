<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TelefonosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TelefonosTable Test Case
 */
class TelefonosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TelefonosTable
     */
    public $Telefonos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.telefonos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Telefonos') ? [] : ['className' => 'App\Model\Table\TelefonosTable'];
        $this->Telefonos = TableRegistry::get('Telefonos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Telefonos);

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
}
