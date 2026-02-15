<?php

namespace app\models;

use Yii;
use manchenkov\yii\recaptcha\ReCaptchaValidator;

/**
 * This is the model class for table "contact".
 *
 * @property int $id
 * @property string $name
 * @property string|null $email
 * @property string $company
 * @property string $company_size
 * @property string|null $message
 */
class Contact extends \yii\db\ActiveRecord
{
    const COMPANY_SIZE_SMALL = '1-10';
    const COMPANY_SIZE_MEDIUM = '11-100';
    const COMPANY_SIZE_LARGE = '101-1000';
    const COMPANY_SIZE_XLARGE = '1000+';

    public $captcha;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['email', 'message'], 'default', 'value' => null],
            [['email'], 'email'],
            [['name', 'email', 'company', 'company_size'], 'required'],
            [['message'], 'string'],
            [['name', 'email', 'company', 'company_size'], 'string', 'max' => 255],
            [['email'], 'unique'],
            ['captcha', ReCaptchaValidator::class, 'score' => 0.8],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'email' => Yii::t('app', 'Email'),
            'company' => Yii::t('app', 'Company'),
            'company_size' => Yii::t('app', 'Company Size'),
            'message' => Yii::t('app', 'Message'),
        ];
    }

    /**
     * column contact ENUM value labels
     * @return string[]
     */
    public static function optsCompanySize()
    {
        return [
            self::COMPANY_SIZE_SMALL => Yii::t('app', '1-10'),
            self::COMPANY_SIZE_MEDIUM => Yii::t('app', '11-100'),
            self::COMPANY_SIZE_LARGE => Yii::t('app', '101-1000'),
            self::COMPANY_SIZE_XLARGE => Yii::t('app', '1000+')
        ];
    }
}
