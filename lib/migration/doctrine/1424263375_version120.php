<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version120 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->addColumn('petition_signing', 'fullname', 'string', '120', array(
             'notnull' => '',
             ));
        $this->addColumn('petition_signing', 'title', 'string', '10', array(
             'notnull' => '',
             ));
        $this->addColumn('petition_signing', 'firstname', 'string', '100', array(
             'notnull' => '',
             ));
        $this->addColumn('petition_signing', 'lastname', 'string', '100', array(
             'notnull' => '',
             ));
        $this->addColumn('petition_signing', 'address', 'string', '200', array(
             'notnull' => '',
             ));
        $this->addColumn('petition_signing', 'city', 'string', '100', array(
             'notnull' => '',
             ));
        $this->addColumn('petition_signing', 'post_code', 'string', '50', array(
             'notnull' => '',
             ));
        $this->addColumn('petition_signing', 'comment', 'clob', '', array(
             'notnull' => '',
             ));
        $this->addColumn('petition_signing', 'privacy', 'integer', '1', array(
             'notnull' => '',
             ));
        $this->addColumn('petition_signing', 'email_subject', 'string', '250', array(
             'notnull' => '',
             ));
        $this->addColumn('petition_signing', 'email_body', 'clob', '', array(
             'notnull' => '',
             ));
        $this->addColumn('petition_signing', 'ref', 'string', '250', array(
             'notnull' => '',
             ));
    }

    public function down()
    {
        $this->removeColumn('petition_signing', 'fullname');
        $this->removeColumn('petition_signing', 'title');
        $this->removeColumn('petition_signing', 'firstname');
        $this->removeColumn('petition_signing', 'lastname');
        $this->removeColumn('petition_signing', 'address');
        $this->removeColumn('petition_signing', 'city');
        $this->removeColumn('petition_signing', 'post_code');
        $this->removeColumn('petition_signing', 'comment');
        $this->removeColumn('petition_signing', 'privacy');
        $this->removeColumn('petition_signing', 'email_subject');
        $this->removeColumn('petition_signing', 'email_body');
        $this->removeColumn('petition_signing', 'ref');
    }
}