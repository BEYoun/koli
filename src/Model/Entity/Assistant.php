<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Assistant Entity
 *
 * @property int $id
 * @property string $nom
 * @property string $prenom
 * @property int $tel
 * @property int $users_id
 * @property string $photo
 *
 * @property \App\Model\Entity\User $user
 */
class Assistant extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'nom' => true,
        'prenom' => true,
        'tel' => true,
        'users_id' => true,
        'photo' => true,
        'user' => true
    ];
}
