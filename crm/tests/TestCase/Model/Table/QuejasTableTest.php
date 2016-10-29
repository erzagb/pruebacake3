<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\QuejasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\QuejasTable Test Case
 */
class QuejasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\QuejasTable
     */
    public $Quejas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.quejas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Quejas') ? [] : ['className' => 'App\Model\Table\QuejasTable'];
        $this->Quejas = TableRegistry::get('Quejas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Quejas);

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
