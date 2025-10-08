<?php
namespace App\Controllers;
use App\Models\PersonalModel;
class RmsController extends BaseController
{
    protected $personalModel;
    public function __construct()
    {
        $this->personalModel = new PersonalModel();
    }
    // view employee list
    public function employees_list()
    {
        // $data['title'] = 'RMS- Employee List';
        // return view('rms/rms_employees_list', $data);
        $model = new PersonalModel();
        $data['title'] = 'RMS- Employee List';
        $data['employees'] = $model->getEmployeeWithDetails();
        return view('rms/rms_employees_list', $data);
    }
    //view incomplete emp list
    public function incomplete_employees_list()
    {
        $model = new PersonalModel();
        $data['title'] = 'RMS- IN-Complete Employee List';
        $data['employees'] = $model->getEmployeeWithDetails();
        return view('rms/rms_incomplete_emp_list', $data);
    }
    // view new joining 
    public function new_joining()
    {
        $data['title'] = 'RMS- New Joining';
        return view('rms/rms_new_joining', $data);
    }
    //save personal info details
    public function personal_info_save()
    {
        $session = session();
        // Model initialize karo agar pehle se initialized nahi hai
        if (!isset($this->personalModel)) {
            $this->personalModel = new PersonalModel();
        }
        $rules = [
            'firstname' => 'required',
            'middlename' => 'permit_empty',
            'lastname' => 'required',
            'fathername' => 'required',
            'mothername' => 'required',
            'martialstatus' => 'required',
            'gender' => 'required',
            'dob' => 'required|valid_date',
            'mobile_no' => 'required|numeric|exact_length[10]',
            'altmobile' => 'required|numeric|exact_length[10]',
            'email' => 'required|valid_email',
            'religion' => 'required'
        ];
        if (!$this->validate($rules)) {
            return $this->response->setJSON([
                'success' => false,
                'errors' => $this->validator->getErrors()
            ]);
        }
        $data = $this->request->getPost();
        $insertData = [
            'firstname' => $data['firstname'],
            'middlename' => $data['middlename'],
            'lastname' => $data['lastname'],
            'fathername' => $data['fathername'],
            'mothername' => $data['mothername'],
            'martialstatus' => $data['martialstatus'],
            'gender' => $data['gender'],
            'dob' => $data['dob'],
            'mobile_no' => $data['mobile_no'],
            'mobile_no_alt' => $data['altmobile'],
            'email' => $data['email'],
            'religion' => $data['religion'],
            'entry_emp' => 'system',
            'entry_ip' => $this->request->getIPAddress(),
            'modify_emp' => 'system',
            'modify_ip' => $this->request->getIPAddress(),
        ];
        // Agar aapne multi-table model approach banaya hai to use karein:
        $lastId = $this->personalModel->saveData('personal_info', $insertData);
        $session->set('personal_info_id', $lastId);
        return $this->response->setJSON([
            'success' => true,
            'message' => 'Personal Info Saved Successfully',
            'id' => $lastId
        ]);
    }
    //save identification details
    public function identification_details_save()
    {
        $session = session();
        //print_r($session->get()); die;
        $personalInfoId = $session->get('personal_info_id');
        // Check if personal_info_id is available
        if (!$personalInfoId) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Personal Info ID not found. Please complete personal info form first.'
            ]);
        }
        // Initialize model
        if (!isset($this->personalModel)) {
            $this->personalModel = new PersonalModel();
        }
        // Validation rules based on current form
        $rules = [
            'aadhar' => 'required',
            'panno' => 'required',
            'voterid' => 'required',
            'passport' => 'required',
            'other' => 'required',
        ];
        if (!$this->validate($rules)) {
            return $this->response->setJSON([
                'success' => false,
                'errors' => $this->validator->getErrors()
            ]);
        }
        // Get posted form data
        $data = $this->request->getPost();
        // Insert data with personal_info_id
        $insertData = [
            // 'personal_info_id' => $personalInfoId,
            'personal_info_id' => $session->get('personal_info_id'), // inject manually
            'aadhar' => $data['aadhar'],
            'panno' => $data['panno'],
            'voterid' => $data['voterid'],
            'passport' => $data['passport'],
            'other' => $data['other'],
        ];
        // Save to appropriate table
        $lastId = $this->personalModel->saveData('iden_details', $insertData);
        return $this->response->setJSON([
            'success' => true,
            'message' => 'Identification details Saved Successfully',
            'id' => $lastId
        ]);
    }
    //save qualification details
    public function qualification_details_save()
    {
        $session = session();
        $personalInfoId = $session->get('personal_info_id');
        if (!$personalInfoId) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Personal Info ID not found. Please complete personal info first.'
            ]);
        }
        if (!isset($this->personalModel)) {
            $this->personalModel = new PersonalModel();
        }
        $qualificationLevels = $this->request->getPost('qualification_level');
        $institutes = $this->request->getPost('institute_name');
        $boards = $this->request->getPost('board_university');
        $subjects = $this->request->getPost('subjects');
        $passingYears = $this->request->getPost('passing_year');
        $marksObtainedList = $this->request->getPost('marks_obtained');
        $totalMarksList = $this->request->getPost('total_marks');
        $count = count($qualificationLevels);
        for ($i = 0; $i < $count; $i++) {
            $data = [
                'personal_info_id' => $personalInfoId,
                'qualification_level' => $qualificationLevels[$i],
                'institute_name' => $institutes[$i],
                'board_university' => $boards[$i],
                'subjects' => $subjects[$i],
                'passing_year' => $passingYears[$i],
                'marks_obtained' => $marksObtainedList[$i],
                'total_marks' => $totalMarksList[$i]
            ];
            // Save each qualification
            $this->personalModel->saveData('qualification_info', $data);
        }
        return $this->response->setJSON([
            'success' => true,
            'message' => 'Qualification details saved successfully.'
        ]);
    }
    //save address details
    public function address_details_save()
    {
        $session = session();
        $personalInfoId = $session->get('personal_info_id');
        if (!$personalInfoId) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Session expired. Please fill personal info first.'
            ]);
        }
        $data = $this->request->getPost();
        // If checkbox is checked, copy permanent to present
        if (!empty($data['same_as_permanent'])) {
            $data['present_address'] = $data['permanent_address'];
            $data['present_state'] = $data['permanent_state'];
            $data['present_district'] = $data['permanent_district'];
            $data['present_pin'] = $data['permanent_pin'];
            $data['same_as_permanent'] = true;
        } else {
            $data['same_as_permanent'] = false;
        }
        $addressData = [
            'personal_info_id' => $personalInfoId,
            'permanent_address' => $data['permanent_address'],
            'permanent_state' => $data['permanent_state'],
            'permanent_district' => $data['permanent_district'],
            'permanent_pin' => $data['permanent_pin'],
            'present_address' => $data['present_address'],
            'present_state' => $data['present_state'],
            'present_district' => $data['present_district'],
            'present_pin' => $data['present_pin'],
            'same_as_permanent' => $data['same_as_permanent']
        ];
        $this->personalModel = new PersonalModel();
        $this->personalModel->saveData('address_info', $addressData);
        return $this->response->setJSON([
            'success' => true,
            'message' => 'Address details saved successfully!'
        ]);
    }
    // save family details
    public function family_details_save()
    {
        $session = session();
        $personalInfoId = $session->get('personal_info_id');

        if (!$personalInfoId) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Session expired. Please fill personal info first.'
            ]);
        }
        $data = $this->request->getPost();
        $familyEntries = [];

        // Father
        $familyEntries[] = [
            'personal_info_id' => $personalInfoId,
            'name' => $data['fathername'],
            'relation' => 'Father',
            'is_nominee' => isset($data['father_is_nominee']) ? true : false,
            'dob' => null
        ];
        // Mother
        $familyEntries[] = [
            'personal_info_id' => $personalInfoId,
            'name' => $data['mothername'],
            'relation' => 'Mother',
            'is_nominee' => isset($data['mother_is_nominee']) ? true : false,
            'dob' => null
        ];
        // Spouse
        $familyEntries[] = [
            'personal_info_id' => $personalInfoId,
            'name' => $data['spousename'],
            'relation' => 'Spouse',
            'is_nominee' => isset($data['spouse_is_nominee']) ? true : false,
            'dob' => null
        ];

        // Children
        if (isset($data['children_name']) && is_array($data['children_name'])) {
            foreach ($data['children_name'] as $index => $childName) {
                $familyEntries[] = [
                    'personal_info_id' => $personalInfoId,
                    'name' => $childName,
                    'relation' => $data['children_relation'][$index] ?? 'Child',
                    'dob' => $data['children_dob'][$index] ?? null,
                    'is_nominee' => false
                ];
            }
        }
        // Save entries
        $this->personalModel = new PersonalModel();
        foreach ($familyEntries as $entry) {
            $this->personalModel->saveData('family_info', $entry);
        }
        return $this->response->setJSON([
            'success' => true,
            'message' => 'Family details saved successfully.'
        ]);
    }
    // save accounts details
    public function accounts_details_save()
    {
        $session = session();
        $personalInfoId = $session->get('personal_info_id');
        // Check if personal_info_id is available
        if (!$personalInfoId) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Personal Info ID not found. Please complete personal info form first.'
            ]);
        }
        // Initialize model
        if (!isset($this->personalModel)) {
            $this->personalModel = new PersonalModel();
        }
        // Validation rules based on current form
        $rules = [
            'bank_name' => 'required',
            'bank_address' => 'required',
            'branch_name' => 'required',
            'bank_account_no' => 'required',
            'bank_ifsc' => 'required',
        ];
        if (!$this->validate($rules)) {
            return $this->response->setJSON([
                'success' => false,
                'errors' => $this->validator->getErrors()
            ]);
        }
        // Get posted form data
        $data = $this->request->getPost();
        // Insert data with personal_info_id
        $insertData = [
            // 'personal_info_id' => $personalInfoId,
            'personal_info_id' => $session->get('personal_info_id'), // inject manually
            'bank_name' => $data['bank_name'],
            'bank_address' => $data['bank_address'],
            'branch_name' => $data['branch_name'],
            'bank_account_no' => $data['bank_account_no'],
            'bank_ifsc' => $data['bank_ifsc'],
        ];
        // Save to appropriate table
        $lastId = $this->personalModel->saveData('accounts_info', $insertData);
        return $this->response->setJSON([
            'success' => true,
            'message' => 'Accounts details Saved Successfully',
            'id' => $lastId
        ]);

    }
    // save emergency details
    public function emergency_details_save()
    {
        $session = session();
        $personalInfoId = $session->get('personal_info_id');
        // Check if personal_info_id is available
        if (!$personalInfoId) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Personal Info ID not found. Please complete personal info form first.'
            ]);
        }
        // Initialize model
        if (!isset($this->personalModel)) {
            $this->personalModel = new PersonalModel();
        }

        // Validation rules (you can enhance this further)
        $rules = [
            'name' => 'required',
            'relation' => 'required',
            'contact_no' => 'required',
        ];

        if (!$this->validate($rules)) {
            return $this->response->setJSON([
                'success' => false,
                'errors' => $this->validator->getErrors()
            ]);
        }

        // Get posted form data
        $data = $this->request->getPost();

        // Prepare data for insert
        $insertData = [
            'personal_info_id' => $personalInfoId,
            'name' => $data['name'],
            'relation' => $data['relation'],
            'contact_no' => $data['contact_no']
        ];

        // Save to 'emergency_info' table via your custom model method
        $lastId = $this->personalModel->saveData('emergency_info', $insertData);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Emergency details saved successfully.',
            'id' => $lastId
        ]);
    }
    //save joining details
    public function joining_details_save()
    {
        $session = session();
        $personalInfoId = $session->get('personal_info_id');
        if (!$personalInfoId) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Personal Info ID not found. Please complete personal info form first.'
            ]);
        }
        // Initialize model
        if (!isset($this->personalModel)) {
            $this->personalModel = new PersonalModel();
        }
        $rules = [
            'department' => 'required',
            'designation' => 'required',
            'state' => 'required',
            'district' => 'required',
            'date_of_joining' => 'required'
        ];
        if (!$this->validate($rules)) {
            return $this->response->setJSON([
                'success' => false,
                'errors' => $this->validator->getErrors()
            ]);
        }
        $data = $this->request->getPost();
        $insertData = [
            'personal_info_id' => $session->get('personal_info_id'),
            'department' => $data['department'],
            'designation' => $data['designation'],
            'state' => $data['state'],
            'district' => $data['district'],
            'date_of_joining' => $data['date_of_joining']
        ];
        // Save to appropriate table
        $lastId = $this->personalModel->saveData('joining_info', $insertData);
        return $this->response->setJSON([
            'success' => true,
            'message' => 'Joining details Saved Successfully',
            'id' => $lastId
        ]);
    }
    //save compliance details
    public function compliance_details_save()
    {
        $session = session();
        $personalInfoId = $session->get('personal_info_id');
        // Check if personal_info_id is available
        if (!$personalInfoId) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Personal Info ID not found. Please complete personal info form first.'
            ]);
        }
        // Initialize model
        if (!isset($this->personalModel)) {
            $this->personalModel = new PersonalModel();
        }
        // Validation rules based on current form
        $rules = [
            'esic_no' => 'required',
            'uan_no' => 'required',
            'medical_card_no' => 'required',
            'any_other' => 'required',
        ];
        if (!$this->validate($rules)) {
            return $this->response->setJSON([
                'success' => false,
                'errors' => $this->validator->getErrors()
            ]);
        }
        // Get posted form data
        $data = $this->request->getPost();
        // Insert data with personal_info_id
        $insertData = [
            // 'personal_info_id' => $personalInfoId,
            'personal_info_id' => $session->get('personal_info_id'), // inject manually
            'esic_no' => $data['esic_no'],
            'uan_no' => $data['uan_no'],
            'medical_card_no' => $data['medical_card_no'],
            'any_other' => $data['any_other']
        ];
        // Save to appropriate table
        $lastId = $this->personalModel->saveData('compliance_info', $insertData);
        return $this->response->setJSON([
            'success' => true,
            'message' => 'Compliance details Saved Successfully',
            'id' => $lastId
        ]);
    }
    // save upload details
    public function upload_details_save()
    {
        $session = session();
        $personalInfoId = $session->get('personal_info_id');
        if (!$personalInfoId) {
            return redirect()->back()->with('error', 'Session expired. Please fill personal info first.');
        }
        $rules = [
            'photo_path' => 'uploaded[photo_path]|is_image[photo_path]|max_size[photo_path,2048]',
            'document_path' => 'uploaded[document_path]|ext_in[document_path,pdf,doc,docx]|max_size[document_path,5120]',
        ];
        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
        $photo = $this->request->getFile('photo_path');
        $document = $this->request->getFile('document_path');
        if (!$photo->isValid() || !$document->isValid()) {
            return redirect()->back()->withInput()->with('error', 'One or both files are invalid.');
        }
        $uploadPath = FCPATH . 'uploaded/' . $personalInfoId . '/';
        if (!is_dir($uploadPath)) {
            if (!mkdir($uploadPath, 0777, true)) {
                return redirect()->back()->with('error', 'Failed to create folder: ' . $uploadPath);
            }
        }
        $date = date('d-m-Y');
        $photoName = 'photo_' . $date . '_' . uniqid() . '.' . $photo->getClientExtension();
        $docName = 'document_' . $date . '_' . uniqid() . '.' . $document->getClientExtension();
        try {
            $photo->move($uploadPath, $photoName);
            $document->move($uploadPath, $docName);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'File move failed: ' . $e->getMessage());
        }
        $model = new PersonalModel();
        $model->saveData('upload_info', [
            'personal_info_id' => $personalInfoId,
            'photo_path' => 'uploaded/' . $personalInfoId . '/' . $photoName,
            'document_path' => 'uploaded/' . $personalInfoId . '/' . $docName,
        ]);
        return redirect()->to('/employeeslist')->with('success', 'Your form submitted successfully.');
    }
    public function emp_profile_view()
    {
        $data['title'] = 'RMS- Employee Profile';
        return view('rms/rms_view_emp_profile', $data);
    }

}