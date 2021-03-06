<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version27 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createForeignKey('default_text', 'default_text_language_id_language_id', array(
             'name' => 'default_text_language_id_language_id',
             'local' => 'language_id',
             'foreign' => 'id',
             'foreignTable' => 'language',
             'onUpdate' => '',
             'onDelete' => 'CASCADE',
             ));
        $this->addIndex('default_text', 'default_text_language_id', array(
             'fields' => 
             array(
              0 => 'language_id',
             ),
             ));
    }

    public function down()
    {
        $this->dropForeignKey('default_text', 'default_text_language_id_language_id');
        $this->removeIndex('default_text', 'default_text_language_id', array(
             'fields' => 
             array(
              0 => 'language_id',
             ),
             ));
    }
}