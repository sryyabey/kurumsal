<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactForm;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    /**
     * Display a listing of the contact forms.
     */
    public function index()
    {
        // Tüm iletişim formu girişlerini alalım
        $contactForms = ContactForm::all();
        return view('admin.contact_forms.index', compact('contactForms'));
    }

    /**
     * Display the specified contact form.
     */
    public function show(ContactForm $contactForm)
    {
        return view('admin.contact_forms.show', compact('contactForm'));
    }
}
