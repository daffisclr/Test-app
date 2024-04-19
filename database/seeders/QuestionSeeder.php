<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'question_label' => 'First Name',
                'input_name' => 'first_name',
                'type' => 'text',
                'step' => 1,
                'description' => '',
                'valid_status' => 1,
                'rules' => 'required',
                'validation_message' => 'Field is required',
                'select_options' => 'Please Select One',
                'select_value' => '',
                'created_at' => date('Y-m-d H:i:s')
            ], [
                'question_label' => 'Last Name',
                'input_name' => 'last_name',
                'type' => 'text',
                'step' => 1,
                'description' => '',
                'valid_status' => 1,
                'rules' => 'required',
                'validation_message' => 'Field is required',
                'select_options' => 'Please Select One',
                'select_value' => '',
                'created_at' => date('Y-m-d H:i:s')
            ], [
                'question_label' => 'Email Address',
                'input_name' => 'email',
                'type' => 'email',
                'step' => 1,
                'description' => '',
                'valid_status' => 1,
                'rules' => 'required',
                'validation_message' => 'Field is required',
                'select_options' => 'Please Select One',
                'select_value' => '',
                'created_at' => date('Y-m-d H:i:s')
            ], [
                'question_label' => 'Phone Number',
                'input_name' => 'phone',
                'type' => 'text',
                'step' => 1,
                'description' => '',
                'valid_status' => 1,
                'rules' => 'required',
                'validation_message' => 'Field is required',
                'select_options' => 'Please Select One',
                'select_value' => '',
                'created_at' => date('Y-m-d H:i:s')
            ], [
                'question_label' => 'Select City',
                'input_name' => 'city',
                'type' => 'select',
                'step' => 1,
                'description' => '',
                'valid_status' => 1,
                'rules' => 'required',
                'validation_message' => 'Field is required',
                'select_options' => 'Please Select One',
                'select_value' => '',
                'created_at' => date('Y-m-d H:i:s')
            ], [
                'question_label' => 'Date of Birth',
                'input_name' => 'birth',
                'type' => 'date',
                'step' => 1,
                'description' => '',
                'valid_status' => 1,
                'rules' => 'required',
                'validation_message' => 'Field is required',
                'select_options' => 'Please Select One',
                'select_value' => '',
                'created_at' => date('Y-m-d H:i:s')
            ], [
                'question_label' => 'Job Title',
                'input_name' => 'job_title',
                'type' => 'text',
                'step' => 2,
                'description' => '',
                'valid_status' => 1,
                'rules' => 'required',
                'validation_message' => 'Field is required',
                'select_options' => 'Please Select One',
                'select_value' => '',
                'created_at' => date('Y-m-d H:i:s')
            ], [
                'question_label' => 'Company Name',
                'input_name' => 'company',
                'type' => 'text',
                'step' => 2,
                'description' => '',
                'valid_status' => 1,
                'rules' => 'required',
                'validation_message' => 'Field is required',
                'select_options' => 'Please Select One',
                'select_value' => '',
                'created_at' => date('Y-m-d H:i:s')
            ], [
                'question_label' => 'Job Description',
                'input_name' => 'job_description',
                'type' => 'textarea',
                'step' => 2,
                'description' => '',
                'valid_status' => 1,
                'rules' => 'required',
                'validation_message' => 'Field is required',
                'select_options' => 'Please Select One',
                'select_value' => '',
                'created_at' => date('Y-m-d H:i:s')
            ], [
                'question_label' => 'Interview For',
                'input_name' => 'interview',
                'type' => 'text',
                'step' => 3,
                'description' => '',
                'valid_status' => 1,
                'rules' => 'required',
                'validation_message' => 'Field is required',
                'select_options' => 'Please Select One',
                'select_value' => '',
                'created_at' => date('Y-m-d H:i:s')
            ], [
                'question_label' => 'Interview Date',
                'input_name' => 'interview_date',
                'type' => 'date',
                'step' => 3,
                'description' => '',
                'valid_status' => 1,
                'rules' => 'required',
                'validation_message' => 'Field is required',
                'select_options' => 'Please Select One',
                'select_value' => '',
                'created_at' => date('Y-m-d H:i:s')
            ], [
                'question_label' => 'Interview Type',
                'input_name' => 'interview_type',
                'type' => 'select',
                'step' => 3,
                'description' => '',
                'valid_status' => 1,
                'rules' => 'required',
                'validation_message' => 'Field is required',
                'select_options' => 'Please Select One',
                'select_value' => '',
                'created_at' => date('Y-m-d H:i:s')
            ], [
                'question_label' => 'Interview Time',
                'input_name' => 'interview_time',
                'type' => 'date',
                'step' => 3,
                'description' => '',
                'valid_status' => 1,
                'rules' => 'required',
                'validation_message' => 'Field is required',
                'select_options' => 'Please Select One',
                'select_value' => '',
                'created_at' => date('Y-m-d H:i:s')
            ], [
                'question_label' => 'Behaviour',
                'input_name' => 'behaviour',
                'type' => 'text',
                'step' => 4,
                'description' => '',
                'valid_status' => 1,
                'rules' => 'required',
                'validation_message' => 'Field is required',
                'select_options' => 'Please Select One',
                'select_value' => '',
                'created_at' => date('Y-m-d H:i:s')
            ], [
                'question_label' => 'Confidance',
                'input_name' => 'confidance',
                'type' => 'text',
                'step' => 4,
                'description' => '',
                'valid_status' => 1,
                'rules' => 'required',
                'validation_message' => 'Field is required',
                'select_options' => 'Please Select One',
                'select_value' => '',
                'created_at' => date('Y-m-d H:i:s')
            ], [
                'question_label' => 'Result',
                'input_name' => 'result',
                'type' => 'select',
                'step' => 4,
                'description' => '',
                'valid_status' => 1,
                'rules' => 'required',
                'validation_message' => 'Field is required',
                'select_options' => 'Please Select One',
                'select_value' => '',
                'created_at' => date('Y-m-d H:i:s')
            ], [
                'question_label' => 'Comments',
                'input_name' => 'comments',
                'type' => 'textarea',
                'step' => 4,
                'description' => '',
                'valid_status' => 1,
                'rules' => 'required',
                'validation_message' => 'Field is required',
                'select_options' => 'Please Select One',
                'select_value' => '',
                'created_at' => date('Y-m-d H:i:s')
            ],
        ];

        Question::insert($data);
    }
}
