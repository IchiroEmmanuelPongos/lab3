<?php

namespace App\Controllers;

use App\Models\GuestModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Guests extends BaseController
{
    public function index()
    {
        $model = model(GuestModel::class);

        $data['guest'] = $model->getGuest();
        $data = [
            'guest'  => $model->getGuest(),
            'title' => 'Guest List',
        ];

        return view('templates/header', $data)
            . view('guests/index')
            . view('templates/guestfooter');		


    }

    public function show($email = null)
    {
        $model = model(GuestModel::class);

        $data['guest'] = $model->getGuest($email);

        if (empty($data['guest'])) {
            throw new PageNotFoundException('Cannot find the guest item: ' . $email);
        }

        $data['title'] = $data['guest']['title'];

        return view('templates/guestheader', $data)
            . view('guest/view')
            . view('templates/guestfooter');
    }
	public function new()
    {
        helper('form');

        return view('templates/guestheader', ['title' => 'Create a item'])
            . view('guests/create')
            . view('templates/guestfooter');
    }
	
	public function create()
    {
        helper('form');

        $data = $this->request->getPost(['title', 'body']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($data, [
            'title' => 'required|max_length[255]|min_length[3]',
            'body'  => 'required|max_length[5000]|min_length[10]',
        ])) {
            // The validation fails, so returns the form.
            return $this->new();
        }

        // Gets the validated data.
        $post = $this->validator->getValidated();

        $model = model(GuestModel::class);

        $model->save([
            'title' => $post['title'],
            'slug'  => url_title($post['title'], '-', true),
            'body'  => $post['body'],
        ]);

        return view('templates/guestheader', ['title' => 'Create a news item'])
            . view('guests/create')
            . view('templates/guestfooter');
    }


}