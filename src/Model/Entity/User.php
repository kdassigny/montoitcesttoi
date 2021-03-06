<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $email
 * @property string $password
 * @property string $username
 * @property string $first_name
 * @property string $last_name
 * @property bool $is_admin
 * @property bool $is_adherant
 * @property int $address_id
 * @property string $telephone_portable
 * @property string $telephone_fixe
 * @property string $facebook
 * @property string $postion
 * @property string $description
 * @property int $image_id
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Address $address
 * @property \App\Model\Entity\Image $image
 * @property \App\Model\Entity\HostFamily[] $host_families
 */
class User extends Entity
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
        '*' => true,
        'id' => false
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
