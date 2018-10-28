<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Textboxes Model
 *
 * @property \App\Model\Table\ImagesTable|\Cake\ORM\Association\BelongsTo $Images
 *
 * @method \App\Model\Entity\Textbox get($primaryKey, $options = [])
 * @method \App\Model\Entity\Textbox newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Textbox[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Textbox|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Textbox|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Textbox patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Textbox[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Textbox findOrCreate($search, callable $callback = null, $options = [])
 */
class TextboxesTable extends Table
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

        $this->setTable('textboxes');
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
            ->integer('x')
            ->requirePresence('x', 'create')
            ->notEmpty('x');

        $validator
            ->integer('y')
            ->requirePresence('y', 'create')
            ->notEmpty('y');

        $validator
            ->scalar('text')
            ->requirePresence('text', 'create')
            ->notEmpty('text');

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
