<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version163 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->addColumn('petition_signing', 'thank_sent', 'integer', '1', array(
             'notnull' => '1',
             'default' => '0',
             ));
        $this->addColumn('petition_signing', 'quota_thank_you_id', 'integer', '4', array(
             'notnull' => '',
             ));
    }

    public function down()
    {
        $this->removeColumn('petition_signing', 'thank_sent');
        $this->removeColumn('petition_signing', 'quota_thank_you_id');
    }
}