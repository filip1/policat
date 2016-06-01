<?php

/**
 * BaseMailingListMetaChoice
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $mailing_list_meta_id
 * @property string $choice
 * @property MailingListMeta $MailingListMeta
 * @property Doctrine_Collection $ContactMeta
 * 
 * @method integer               getId()                   Returns the current record's "id" value
 * @method integer               getMailingListMetaId()    Returns the current record's "mailing_list_meta_id" value
 * @method string                getChoice()               Returns the current record's "choice" value
 * @method MailingListMeta       getMailingListMeta()      Returns the current record's "MailingListMeta" value
 * @method Doctrine_Collection   getContactMeta()          Returns the current record's "ContactMeta" collection
 * @method MailingListMetaChoice setId()                   Sets the current record's "id" value
 * @method MailingListMetaChoice setMailingListMetaId()    Sets the current record's "mailing_list_meta_id" value
 * @method MailingListMetaChoice setChoice()               Sets the current record's "choice" value
 * @method MailingListMetaChoice setMailingListMeta()      Sets the current record's "MailingListMeta" value
 * @method MailingListMetaChoice setContactMeta()          Sets the current record's "ContactMeta" collection
 * 
 * @package    policat
 * @subpackage model
 * @author     developer-docker
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseMailingListMetaChoice extends myDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('mailing_list_meta_choice');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('mailing_list_meta_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('choice', 'string', 120, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 120,
             ));


        $this->index('mlmc_choice', array(
             'fields' => 
             array(
              0 => 'choice',
             ),
             ));
        $this->index('mlmc_ml_choice', array(
             'fields' => 
             array(
              0 => 'mailing_list_meta_id',
              1 => 'choice',
             ),
             ));
        $this->option('symfony', array(
             'form' => true,
             'filter' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('MailingListMeta', array(
             'local' => 'mailing_list_meta_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasMany('ContactMeta', array(
             'local' => 'id',
             'foreign' => 'mailing_list_meta_choice_id'));
    }
}