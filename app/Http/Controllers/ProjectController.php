<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = [
            [
                'title' => 'E-Commerce Platform',
                'short_description' => 'A fully-featured online store.',
                'description' => 'Built a responsive e-commerce site with payment integration and admin dashboard.',
                'image' => 'ecommerce.jpg',
                'technologies' => 'Laravel, Livewire, Tailwind CSS',
                'url' => 'https://example-ecommerce.com',
                'badge' => 'featured'
            ],
            [
                'title' => 'Portfolio Website',
                'short_description' => 'Personal portfolio with dynamic features.',
                'description' => 'This very site! Showcasing my skills with interactive elements.',
                'image' => 'portfolio.jpg',
                'technologies' => 'Laravel, React, AOS',
                'url' => 'https://yourportfolio.com',
                'badge' => 'live'
            ],
            [
                'title' => 'Barber',
                'short_description' => 'A tool for managing daily tasks.',
                'description' => 'A sleek task management app with real-time updates, still in development.',
                'image' => 'barber.webp',
                'technologies' => 'Laravel, Vue.js, MySQL',
                'url' => 'https://taskmanager.com',
                'badge' => 'progress'
            ],
        ];

        return view('projects', compact('projects'));
    }
}