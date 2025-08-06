<?php

namespace App\Models;
use CodeIgniter\Model;
class PersonalModel extends Model
{
    protected $table;          // Table name set dynamic  
    protected $primaryKey;     // Primary key set dynamic
    protected $allowedFields;  // Allowed fields set dynamic
    protected $tablesConfig = [
        'personal_info' => [
            'primaryKey' => 'personal_info_id',
            'allowedFields' => [
                'firstname', 'middlename', 'lastname', 'fathername', 'mothername', 
                'martialstatus', 'gender', 'dob', 'mobile_no', 'mobile_no_alt', 'email', 
                'religion','entry_emp','entry_ip','modify_emp','modify_ip'],
                'timestamps' => true,
                'createdField' => 'entry_date',
                'updatedField' => 'modify_date',
        ],
        'iden_details' => [
            'primaryKey' => 'id',
            'allowedFields' => [
                'personal_info_id', 'aadhar', 'panno', 'voterid', 
                'passport', 'other'
            ],
             'timestamps' => false,
             'foreignKeys' => [
            'personal_info_id' => 'personal_info(personal_info_id)'
            ]
        ],
       'qualification_info' => [
        'primaryKey' => 'id',
        'allowedFields' => [
            'personal_info_id', 'qualification_level', 'institute_name',
            'board_university', 'subjects', 'passing_year',
            'marks_obtained', 'total_marks'
            ],
        'timestamps' => false,
        'foreignKeys' => [
        'personal_info_id' => 'personal_info(personal_info_id)'
        ]
        ],
        'address_info' => [
            'primaryKey' => 'id',
            'allowedFields' => [
                'personal_info_id', 'permanent_address','permanent_state',
                'permanent_district', 'permanent_pin', 'present_address', 
                'present_state', 'present_district', 'present_pin','same_as_permanent'
            ],
            'timestamps' => false,
            'foreignKeys' => [
            'personal_info_id' => 'personal_info(personal_info_id)'
            ]
            ],
            'family_info' => [
            'primaryKey' => 'id',
            'allowedFields' => [ 'personal_info_id', 'name','relation','dob', 'is_nominee'],
            'timestamps' => false,
            'foreignKeys' => [
            'personal_info_id' => 'personal_info(personal_info_id)'
            ]
            ],
            'accounts_info' => [
            'primaryKey' => 'id',
            'allowedFields' => [
            'personal_info_id', 'bank_name', 'bank_address',
            'branch_name', 'bank_account_no', 'bank_ifsc'
            ],
            'timestamps' => false,
            'foreignKeys' => [
            'personal_info_id' => 'personal_info(personal_info_id)'
             ]
            ],
            'emergency_info' => [
            'primaryKey' => 'id',
            'allowedFields' => [
            'personal_info_id', 'name', 'relation',
            'contact_no'
            ],
            'timestamps' => false,
            'foreignKeys' => [
            'personal_info_id' => 'personal_info(personal_info_id)'
             ]
            ],
            'joining_info' => [
            'primaryKey' => 'id',
            'allowedFields' => [
            'personal_info_id', 'department', 'designation', 'state', 'district'
            ],
            'timestamps' => false,
            'foreignKeys' => [
            'personal_info_id' => 'personal_info(personal_info_id)'
             ]
            ],
            'compliance_info' => [
            'primaryKey' => 'id',
            'allowedFields' => [
            'personal_info_id', 'esic_no', 'uan_no', 'medical_card_no', 'any_other'
            ],
            'timestamps' => false,
            'foreignKeys' => [
            'personal_info_id' => 'personal_info(personal_info_id)'
             ]
            ],
            'upload_info' => [
            'primaryKey' => 'id',
            'allowedFields' => [
            'personal_info_id', 'photo_path', 'document_path'
            ],
            'timestamps' => false,
            'foreignKeys' => [
            'personal_info_id' => 'personal_info(personal_info_id)'
             ]
            ],
        // add more tables here.....
    ];
    // Table setup function
    protected function setTableConfig(string $tableName)
    {
        if (!isset($this->tablesConfig[$tableName])) {
            throw new \Exception("Table config for '{$tableName}' is not defined.");
        }
        $this->table = $tableName;
        $this->primaryKey = $this->tablesConfig[$tableName]['primaryKey'];
        $this->allowedFields = $this->tablesConfig[$tableName]['allowedFields'];
    }
    // Data save generic function
    public function saveData(string $tableName, array $data)
    {
        $this->setTableConfig($tableName);
        //filter as per allowed fields
        $filteredData = array_intersect_key($data, array_flip($this->allowedFields));
        //if PK present so update otherwise insert
        if (isset($data[$this->primaryKey]) && !empty($data[$this->primaryKey])) {
            $this->update($data[$this->primaryKey], $filteredData);
            return $data[$this->primaryKey];
        } else {
            $this->insert($filteredData);
            return $this->getInsertID();
        }
    }
}



