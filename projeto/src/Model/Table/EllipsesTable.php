<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ellipses Model
 *
 * @property \App\Model\Table\ImagesTable|\Cake\ORM\Association\BelongsTo $Images
 *
 * @method \App\Model\Entity\Ellipse get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ellipse newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Ellipse[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ellipse|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ellipse|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ellipse patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ellipse[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ellipse findOrCreate($search, callable $callback = null, $options = [])
 */
class EllipsesTable extends Table
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

        $this->setTable('ellipses');
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
            ->integer('center_x')
            ->requirePresence('center_x', 'create')
            ->notEmpty('center_x');

        $validator
            ->integer('center_y')
            ->requirePresence('center_y', 'create')
            ->notEmpty('center_y');

        $validator
            ->integer('axis_one')
            ->requirePresence('axis_one', 'create')
            ->notEmpty('axis_one');

        $validator
            ->integer('axis_two')
            ->requirePresence('axis_two', 'create')
            ->notEmpty('axis_two');

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
