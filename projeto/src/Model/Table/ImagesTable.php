<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Images Model
 *
 * @property \App\Model\Table\ImageTypesTable|\Cake\ORM\Association\BelongsTo $ImageTypes
 * @property \App\Model\Table\DiseasesTable|\Cake\ORM\Association\BelongsTo $Diseases
 * @property \App\Model\Table\PatientsTable|\Cake\ORM\Association\BelongsTo $Patients
 * @property \App\Model\Table\ArrowsTable|\Cake\ORM\Association\HasMany $Arrows
 * @property \App\Model\Table\EllipsesTable|\Cake\ORM\Association\HasMany $Ellipses
 * @property \App\Model\Table\TextboxesTable|\Cake\ORM\Association\HasMany $Textboxes
 *
 * @method \App\Model\Entity\Image get($primaryKey, $options = [])
 * @method \App\Model\Entity\Image newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Image[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Image|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Image|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Image patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Image[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Image findOrCreate($search, callable $callback = null, $options = [])
 */
class ImagesTable extends Table
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

        $this->setTable('images');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('ImageTypes', [
            'foreignKey' => 'image_type_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Diseases', [
            'foreignKey' => 'disease_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Patients', [
            'foreignKey' => 'patient_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Arrows', [
            'foreignKey' => 'image_id'
        ]);
        $this->hasMany('Ellipses', [
            'foreignKey' => 'image_id'
        ]);
        $this->hasMany('Textboxes', [
            'foreignKey' => 'image_id'
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
            ->maxLength('name', 500)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('file_name')
            ->maxLength('file_name', 500)
            ->requirePresence('file_name', 'create')
            ->notEmpty('file_name');

        $validator
            ->scalar('description')
            ->requirePresence('description', 'create')
            ->notEmpty('description');

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
        $rules->add($rules->existsIn(['image_type_id'], 'ImageTypes'));
        $rules->add($rules->existsIn(['disease_id'], 'Diseases'));
        $rules->add($rules->existsIn(['patient_id'], 'Patients'));

        return $rules;
    }
}
