<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "characters".
 *
 * @property string $account_name
 * @property integer $obj_Id
 * @property string $char_name
 * @property integer $face
 * @property integer $hairStyle
 * @property integer $hairColor
 * @property integer $sex
 * @property integer $heading
 * @property integer $x
 * @property integer $y
 * @property integer $z
 * @property integer $karma
 * @property integer $pvpkills
 * @property integer $pkkills
 * @property integer $clanid
 * @property string $createtime
 * @property string $deletetime
 * @property string $title
 * @property integer $rec_have
 * @property integer $rec_left
 * @property integer $rec_bonus_time
 * @property integer $hunt_points
 * @property integer $hunt_time
 * @property integer $accesslevel
 * @property integer $online
 * @property string $onlinetime
 * @property string $lastAccess
 * @property string $leaveclan
 * @property string $deleteclan
 * @property integer $nochannel
 * @property integer $pledge_type
 * @property integer $pledge_rank
 * @property integer $lvl_joined_academy
 * @property string $apprentice
 * @property string $key_bindings
 * @property integer $pcBangPoints
 * @property integer $vitality
 * @property integer $fame
 * @property integer $bookmarks
 */
class Characters extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'characters';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['obj_Id'], 'required'],
            [['obj_Id', 'face', 'hairStyle', 'hairColor', 'sex', 'heading', 'x', 'y', 'z', 'karma', 'pvpkills', 'pkkills', 'clanid', 'createtime', 'deletetime', 'rec_have', 'rec_left', 'rec_bonus_time', 'hunt_points', 'hunt_time', 'accesslevel', 'online', 'onlinetime', 'lastAccess', 'leaveclan', 'deleteclan', 'nochannel', 'pledge_type', 'pledge_rank', 'lvl_joined_academy', 'apprentice', 'pcBangPoints', 'vitality', 'fame', 'bookmarks'], 'integer'],
            [['account_name'], 'string', 'max' => 45],
            [['char_name'], 'string', 'max' => 35],
            [['title'], 'string', 'max' => 16],
            [['key_bindings'], 'string', 'max' => 8192],
            [['char_name'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'account_name' => 'Account Name',
            'obj_Id' => 'Obj  ID',
            'char_name' => 'Char Name',
            'face' => 'Face',
            'hairStyle' => 'Hair Style',
            'hairColor' => 'Hair Color',
            'sex' => 'Sex',
            'heading' => 'Heading',
            'x' => 'X',
            'y' => 'Y',
            'z' => 'Z',
            'karma' => 'Karma',
            'pvpkills' => 'Pvpkills',
            'pkkills' => 'Pkkills',
            'clanid' => 'Clanid',
            'createtime' => 'Createtime',
            'deletetime' => 'Deletetime',
            'title' => 'Title',
            'rec_have' => 'Rec Have',
            'rec_left' => 'Rec Left',
            'rec_bonus_time' => 'Rec Bonus Time',
            'hunt_points' => 'Hunt Points',
            'hunt_time' => 'Hunt Time',
            'accesslevel' => 'Accesslevel',
            'online' => 'Online',
            'onlinetime' => 'Onlinetime',
            'lastAccess' => 'Last Access',
            'leaveclan' => 'Leaveclan',
            'deleteclan' => 'Deleteclan',
            'nochannel' => 'Nochannel',
            'pledge_type' => 'Pledge Type',
            'pledge_rank' => 'Pledge Rank',
            'lvl_joined_academy' => 'Lvl Joined Academy',
            'apprentice' => 'Apprentice',
            'key_bindings' => 'Key Bindings',
            'pcBangPoints' => 'Pc Bang Points',
            'vitality' => 'Vitality',
            'fame' => 'Fame',
            'bookmarks' => 'Bookmarks',
        ];
    }
}
