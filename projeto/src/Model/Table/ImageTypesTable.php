<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ImageTypes Model
 *
 * @property \App\Model\Table\ImagesTable|\Cake\ORM\Association\HasMany $Images
 *
 * @method \App\Model\Entity\ImageType get($primaryKey, $options = [])
 * @method \App\Model\Entity\ImageType newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ImageType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ImageType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ImageType|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ImageType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ImageType[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ImageType findOrCreate($search, callable $callback = null, $options = [])
 */
class ImageTypesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('image_types');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Images', [
            'foreignKey' => 'image_type_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 20)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        return $validator;
    }
}
