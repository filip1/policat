<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version169 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->addColumn('petition', 'subscribe_default', 'integer', '1', array(
             'notnull' => '1',
             'default' => '1',
             ));
        $this->addColumn('petition_text', 'form_title', 'string', '100', array(
             'notnull' => '',
             'default' => '',
             ));
        $this->addColumn('petition_text', 'subscribe_text', 'string', '250', array(
             'notnull' => '',
             'default' => '',
             ));
    }

    public function down()
    {
        $this->removeColumn('petition', 'subscribe_default');
        $this->removeColumn('petition_text', 'form_title');
        $this->removeColumn('petition_text', 'subscribe_text');
    }
}