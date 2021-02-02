<?php namespace App\Controllers;





use App\Models\UserModel;


use App\Models\ProjectsModel;






class Users extends BaseController


{


	public function index()


	{


        $data = [];


        helper(['form']);





		    echo view('templates/header', $data);


        echo view('home');


        echo view('templates/footer', $data);


    }





    public function login()


			{


        $data = [];


        helper(['form']);





        if ($this->request->getMethod() == 'post') {





            $rules = [





                'os_email' => 'required|min_length[6]|max_length[60]|valid_email',


                'os_password' => 'required|min_length[6]|max_length[255]|validateUser[os_email,os_email]',





            ];





            $errors = [





                'os_password' => [


                    'validateUser' => 'Email or Password incorect'


                ]





            ];





            if(!$this->validate($rules, $errors)) {


                $data['validation'] = $this->validator;


            }


            else


						{


                $userModel = new UserModel();





                $user = $userModel->where('os_email', $this->request->getVar('os_email') )


                             ->first();





								if ($user['os_type'] == 'Administrator')


								{





									$this->setAdminSession($user);





									return redirect()->to('admin/dashboard');


								}


								elseif ($user['os_type'] == 'Client')


								{





									$this->setUserSession($user);





									return redirect()->to('home');


								}





            }





        }





				echo view('templates/inc/header', $data);


        echo view('login');


        echo view('templates/inc/footer', $data);


    	}





		public function setAdminSession($user)


	    {





	        $data = [


	            'os_id' => $user['os_id'],


							'os_type' => $user['os_type'],


	            'os_firstname' => $user['os_firstname'],


	            'os_lastname' => $user['os_lastname'],


	            'os_email' => $user['os_email'],


							'os_location' => $user['os_location'],


							'os_address' => $user['os_address'],


							'os_tickets' => $user['os_tickets'],


							'os_projects' => $user['os_projects'],


							'os_number' => $user['os_number'],


							'os_avatar' => $user['os_avatar'],


	            'isLoggedIn' => true,


	        ];





	        session()->set($data);


	        return true;


	    }





    public function setUserSession($user)


    {





        $data = [


            'os_id' => $user['os_id'],


						'os_type' => $user['os_type'],


            'os_firstname' => $user['os_firstname'],


            'os_lastname' => $user['os_lastname'],


            'os_email' => $user['os_email'],


						'os_location' => $user['os_location'],


						'os_address' => $user['os_address'],


						'os_tickets' => $user['os_tickets'],


						'os_projects' => $user['os_projects'],


						'os_number' => $user['os_number'],


						'os_avatar' => $user['os_avatar'],


            'isLoggedIn' => true,


        ];





        session()->set($data);


        return true;


    }





    public function logout()


    {


        session()->destroy();


        return redirect()->to('/');


    }





		public function personalizare()


		{


				helper(['form']);



				$data = [];


				$data['sizes'] = [

					'S',

					'M',

					'L',

					'XL'

				];



				$data['material'] = [

					'Bumbac',

					'Sintetic',

					'Licra',

					'Piele'

				];



				$data['place'] = [

					'Spate',

					'Piept',

					'Umeri'

			  ];



				$data['procentaj'] = [

					'10%',

					'20%',

					'30%',

					'40%',

					'50%',

					'60%',

					'70%',

					'80%',

					'90%'

				];

		
				$projectModel = new ProjectsModel();




				if ($this->request->getMethod() == 'post') {


						$rules = [


								'os_firstname' => 'required|min_length[3]|max_length[20]',
								'os_lastname' => 'required|min_length[3]|max_length[20]',
								'os_email' => 'required|min_length[6]|max_length[60]|valid_email|is_unique[os_accounts.os_email]',
								'os_company' => 'required|min_length[3]|max_length[20]',
								'os_location' => 'required|min_length[3]|max_length[20]',
								'os_address' => 'required|min_length[3]|max_length[20]',
								'os_product' => 'required|min_length[1]|max_length[20]',
								'os_place' => 'required|min_length[3]|max_length[20]',
								'os_email' => 'required|min_length[3]|max_length[20]',
								'os_procent' => 'required|min_length[3]|max_length[20]',
								'os_color' => 'required|min_length[3]|max_length[50]',
								'os_style' => 'required|min_length[3]|max_length[20]',
								'os_description' => 'min_length[3]|max_length[250]',



						];


						if(!$this->validate($rules)) {
								$data['validation'] = $this->validator;
						}

						else {

							    $radio_value = $this->input->post('os_product');
								$newData = [
										'os_id' => session()->get('os_id'),
										'os_firstname' => $this->request->getVar('os_firstname'),
										'os_lastname' => $this->request->getVar('os_lastname'),
										'os_email' => $this->request->getVar('os_email'),
										'os_company' => $this->request->getVar('os_company'),
										'os_location' => $this->request->getVar('os_location'),
										'os_address' => $this->request->getVar('os_address'),
										'os_product' => $radio_value,
										'os_size' => $this->request->getVar('os_size'),
										'os_place' => $this->request->getVar('os_place'),
										'os_procent' => $this->request->getVar('os_procent'),
										'os_color' => $this->request->getVar('os_color'),
										'os_style' => $this->request->getVar('os_style'),
										'os_description' => $this->request->getVar('os_description')

								];

								$projectModel->save($newData);

								session()->setFlashdata('success', 'Successful updated');
								return redirect()->to('personalizare/success');
						}

				}


				$data['user'] = $projectModel->where('os_id', session()->get('os_id'))->first();


				echo view('templates/material/header', $data);


				echo view('pages/personalizare', $data);


				echo view('templates/material/footer', $data);


		}





	//--------------------------------------------------------------------





}


