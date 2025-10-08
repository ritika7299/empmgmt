<?php
namespace App\Models;
use CodeIgniter\Model;
class PersonalModel extends Model
{
    public function __construct()
    {
        parent::__construct();
        $this->db = \Config\Database::connect();
    }

    protected $table;          // Table name set dynamic  
    protected $primaryKey;     // Primary key set dynamic
    protected $allowedFields;  // Allowed fields set dynamic
    protected $tablesConfig = [
        'personal_info' => [
            'primaryKey' => 'personal_info_id',
            'allowedFields' => [
                'firstname',
                'middlename',
                'lastname',
                'fathername',
                'mothername',
                'martialstatus',
                'gender',
                'dob',
                'mobile_no',
                'mobile_no_alt',
                'email',
                'religion',
                'entry_emp',
                'entry_ip',
                'modify_emp',
                'modify_ip'
            ],
            'timestamps' => true,
            'createdField' => 'entry_date',
            'updatedField' => 'modify_date',
        ],
        'iden_details' => [
            'primaryKey' => 'id',
            'allowedFields' => [
                'personal_info_id',
                'aadhar',
                'panno',
                'voterid',
                'passport',
                'other',
                'entry_emp',
                'entry_ip',
                'modify_emp',
                'modify_ip'
            ],
            'timestamps' => true,
            'createdField' => 'entry_date',
            'updatedField' => 'modify_date',
            'foreignKeys' => [
                'personal_info_id' => 'personal_info(personal_info_id)'
            ]
        ],
        'qualification_info' => [
            'primaryKey' => 'id',
            'allowedFields' => [
                'personal_info_id',
                'qualification_level',
                'institute_name',
                'board_university',
                'subjects',
                'passing_year',
                'marks_obtained',
                'total_marks',
                'entry_emp',
                'entry_ip',
                'modify_emp',
                'modify_ip'
            ],
            'timestamps' => true,
            'createdField' => 'entry_date',
            'updatedField' => 'modify_date',
            'foreignKeys' => [
                'personal_info_id' => 'personal_info(personal_info_id)'
            ]
        ],
        'address_info' => [
            'primaryKey' => 'id',
            'allowedFields' => [
                'personal_info_id',
                'permanent_address',
                'permanent_state',
                'permanent_district',
                'permanent_pin',
                'present_address',
                'present_state',
                'present_district',
                'present_pin',
                'same_as_permanent',
                'entry_emp',
                'entry_ip',
                'modify_emp',
                'modify_ip'
            ],
            'timestamps' => true,
            'createdField' => 'entry_date',
            'updatedField' => 'modify_date',
            'foreignKeys' => [
                'personal_info_id' => 'personal_info(personal_info_id)'
            ]
        ],
        'family_info' => [
            'primaryKey' => 'id',
            'allowedFields' => [
                'personal_info_id',
                'name',
                'relation',
                'dob',
                'is_nominee',
                'entry_emp',
                'entry_ip',
                'modify_emp',
                'modify_ip'
            ],
            'timestamps' => true,
            'createdField' => 'entry_date',
            'updatedField' => 'modify_date',
            'foreignKeys' => [
                'personal_info_id' => 'personal_info(personal_info_id)'
            ]
        ],
        'accounts_info' => [
            'primaryKey' => 'id',
            'allowedFields' => [
                'personal_info_id',
                'bank_name',
                'bank_address',
                'branch_name',
                'bank_account_no',
                'bank_ifsc',
                'entry_emp',
                'entry_ip',
                'modify_emp',
                'modify_ip'
            ],
            'timestamps' => true,
            'createdField' => 'entry_date',
            'updatedField' => 'modify_date',
            'foreignKeys' => [
                'personal_info_id' => 'personal_info(personal_info_id)'
            ]
        ],
        'emergency_info' => [
            'primaryKey' => 'id',
            'allowedFields' => [
                'personal_info_id',
                'name',
                'relation',
                'contact_no',
                'entry_emp',
                'entry_ip',
                'modify_emp',
                'modify_ip'
            ],
            'timestamps' => true,
            'createdField' => 'entry_date',
            'updatedField' => 'modify_date',
            'foreignKeys' => [
                'personal_info_id' => 'personal_info(personal_info_id)'
            ]
        ],
        'joining_info' => [
            'primaryKey' => 'id',
            'allowedFields' => [
                'personal_info_id',
                'department',
                'designation',
                'state',
                'district',
                'date_of_joining',
                'entry_emp',
                'entry_ip',
                'modify_emp',
                'modify_ip'
            ],
            'timestamps' => true,
            'createdField' => 'entry_date',
            'updatedField' => 'modify_date',
            'foreignKeys' => [
                'personal_info_id' => 'personal_info(personal_info_id)'
            ]
        ],
        'compliance_info' => [
            'primaryKey' => 'id',
            'allowedFields' => [
                'personal_info_id',
                'esic_no',
                'uan_no',
                'medical_card_no',
                'any_other',
                'entry_emp',
                'entry_ip',
                'modify_emp',
                'modify_ip'
            ],
            'timestamps' => true,
            'createdField' => 'entry_date',
            'updatedField' => 'modify_date',
            'foreignKeys' => [
                'personal_info_id' => 'personal_info(personal_info_id)'
            ]
        ],
        'upload_info' => [
            'primaryKey' => 'id',
            'allowedFields' => [
                'personal_info_id',
                'photo_path',
                'document_path',
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
    //get employee personal details
    public function getEmployeeWithDetails()
    {
        return $this->db->table('personal_info e')
            ->select('e.personal_info_id, e.firstname, e.lastname, e.fathername, d.date_of_joining, d.department')
            ->join('joining_info d', 'd.personal_info_id = e.personal_info_id', 'left')
            ->orderBy('e.personal_info_id', 'DESC')
            ->get()
            ->getResult();
    }
    // get employee all details 
    public function getEmployeeDetails($personalInfoId)
    {
        // Master Table
        $personal = $this->db->table('personal_info')
            ->where('personal_info_id', $personalInfoId)
            ->get()
            ->getRowArray();

        if (!$personal) {
            return null; // Agar record hi nahi mila
        }
        // Related Tables (foreign key = personal_info_id)
        $identity = $this->db->table('iden_details')->where('personal_info_id', $personalInfoId)->get()->getResultArray();
        $qualification = $this->db->table('qualification_info')->where('personal_info_id', $personalInfoId)->get()->getResultArray();
        $address = $this->db->table('address_info')->where('personal_info_id', $personalInfoId)->get()->getResultArray();
        $family = $this->db->table('family_info')->where('personal_info_id', $personalInfoId)->get()->getResultArray();
        $accounts = $this->db->table('accounts_info')->where('personal_info_id', $personalInfoId)->get()->getResultArray();
        $emergency = $this->db->table('emergency_info')->where('personal_info_id', $personalInfoId)->get()->getResultArray();
        $joining = $this->db->table('joining_info')->where('personal_info_id', $personalInfoId)->get()->getResultArray();
        $compliance = $this->db->table('compliance_info')->where('personal_info_id', $personalInfoId)->get()->getResultArray();
        $uploads = $this->db->table('upload_info')->where('personal_info_id', $personalInfoId)->get()->getResultArray();
        // Return structured data
        return [
            'personal' => $personal,
            'qualification' => $qualification,
            'address' => $address,
            'identity' => $identity,
            'family' => $family,
            'accounts' => $accounts,
            'emergency' => $emergency,
            'joining' => $joining,
            'compliance' => $compliance,
            'uploads' => $uploads
        ];
    }
    // fetch emergency contact info
    public function getEmergencyContacts($personalInfoId)
    {
        return $this->db->table('emergency_info')
            ->select('name, relation, contact_no')
            ->where('personal_info_id', $personalInfoId)
            ->where('isactive', true)
            ->get()

            ->getResultArray(); // returns an array of contacts
    }
    //feth qualification info
    public function getQualifications($personalInfoId)
    {
        return $this->db->table('qualification_info')
            ->select('qualification_level, board_university, passing_year')
            ->where('personal_info_id', $personalInfoId)
            ->orderBy('id', 'ASC')
            ->get()
            ->getResultArray();
    }
    //fetch family details 
    public function getFamilyDetails($personalInfoId)
    {
        return $this->db->table('family_info')
            ->where('personal_info_id', $personalInfoId)
            ->get()
            ->getResultArray();
    }
}



