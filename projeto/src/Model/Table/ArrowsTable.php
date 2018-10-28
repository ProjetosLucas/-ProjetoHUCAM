<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Arrows Model
 *
 * @property \App\Model\Table\ImagesTable|\Cake\ORM\Association\BelongsTo $Images
 *
 * @method \App\Model\Entity\Arrow get($primaryKey, $options = [])
 * @method \App\Model\Entity\Arrow newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Arrow[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Arrow|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Arrow|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Arrow patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Arrow[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Arrow findOrCreate($search, callable $callback = null, $options = [])
 */
class ArrowsTable extends Table
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

        $this->setTable('arrows');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Images', [
            'foreignKey' => 'image_id',
            'joinType' => 'INNER'
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
            ->integer('x1')
            ->requirePresence('x1', 'create')
            ->notEmpty('x1');

        $validator
            ->integer('y1')
            ->requirePresence('y1', 'create')
            ->notEmpty('y1');

        $validator
            ->integer('x2')
            ->requirePresence('x2', 'create')
            ->notEmpty('x2');

        $validator
            ->integer('y2')
            ->requirePresence('y2', 'create')
            ->notEmpty('y2');

        $validator
            ->scalar('color')
            ->maxLength('color', 20)
            ->requirePresence('color', 'create')
            ->notEmpty('color');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['image_id'], 'Images'));

        return $rules;
    }
}
