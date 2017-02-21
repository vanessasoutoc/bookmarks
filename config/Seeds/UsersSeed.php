<?php
use Migrations\AbstractSeed;
use Cake\Auth\DefaultPasswordHasher;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */

    public function run()
    {

        $hasher = new DefaultPasswordHasher();

        $data = [
            'id'=>1,
            'email'=>'vanessasoutoc@gmail.com',
            'password'=> $hasher->hash('vane5060')
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
