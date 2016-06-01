<?php

/**
 * BaseMediaFiles
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $petition_id
 * @property string $filename
 * @property string $name
 * @property string $mimetype
 * @property string $title
 * @property string $path
 * @property string $extention
 * @property integer $size
 * @property integer $sort_order
 * @property Petition $Petition
 * 
 * @method integer    getId()          Returns the current record's "id" value
 * @method integer    getPetitionId()  Returns the current record's "petition_id" value
 * @method string     getFilename()    Returns the current record's "filename" value
 * @method string     getName()        Returns the current record's "name" value
 * @method string     getMimetype()    Returns the current record's "mimetype" value
 * @method string     getTitle()       Returns the current record's "title" value
 * @method string     getPath()        Returns the current record's "path" value
 * @method string     getExtention()   Returns the current record's "extention" value
 * @method integer    getSize()        Returns the current record's "size" value
 * @method integer    getSortOrder()   Returns the current record's "sort_order" value
 * @method Petition   getPetition()    Returns the current record's "Petition" value
 * @method MediaFiles setId()          Sets the current record's "id" value
 * @method MediaFiles setPetitionId()  Sets the current record's "petition_id" value
 * @method MediaFiles setFilename()    Sets the current record's "filename" value
 * @method MediaFiles setName()        Sets the current record's "name" value
 * @method MediaFiles setMimetype()    Sets the current record's "mimetype" value
 * @method MediaFiles setTitle()       Sets the current record's "title" value
 * @method MediaFiles setPath()        Sets the current record's "path" value
 * @method MediaFiles setExtention()   Sets the current record's "extention" value
 * @method MediaFiles setSize()        Sets the current record's "size" value
 * @method MediaFiles setSortOrder()   Sets the current record's "sort_order" value
 * @method MediaFiles setPetition()    Sets the current record's "Petition" value
 * 
 * @package    policat
 * @subpackage model
 * @author     developer-docker
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseMediaFiles extends myDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('media_files');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('petition_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('filename', 'string', 255, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 255,
             ));
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 255,
             ));
        $this->hasColumn('mimetype', 'string', 40, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 40,
             ));
        $this->hasColumn('title', 'string', 255, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 255,
             ));
        $this->hasColumn('path', 'string', 255, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 255,
             ));
        $this->hasColumn('extention', 'string', 10, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 10,
             ));
        $this->hasColumn('size', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 1,
             ));
        $this->hasColumn('sort_order', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 1,
             ));

        $this->option('orderBy', 'sort_order, created_at');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Petition', array(
             'local' => 'petition_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}