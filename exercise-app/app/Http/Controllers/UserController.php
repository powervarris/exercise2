<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    protected $users = [
        [
            "id" => 1,
            "title_of_blog" => "The Future of Technology",
            "author" => "Alice Johnson",
            "short_description" => "In this blog, we delve into the exciting developments that are shaping the future of technology. From advancements in artificial intelligence to the rise of quantum computing, technology is evolving at a rapid pace. We explore how these changes will impact various industries and everyday life. Stay ahead of the curve with our comprehensive insights and predictions.",
            "date_created" => "2024-01-15"
        ],
        [
            "id" => 2,
            "title_of_blog" => "Design Principles",
            "author" => "Bob Smith",
            "short_description" => "Discover the fundamental principles of design that drive successful visual communication. This blog covers everything from balance and contrast to typography and color theory. Learn how these principles can be applied to create aesthetically pleasing and functional designs. Whether you’re a seasoned designer or just starting out, these insights will enhance your creative skills.",
            "date_created" => "2024-02-10"
        ],
        [
            "id" => 3,
            "title_of_blog" => "Data Analysis 101",
            "author" => "Carol Williams",
            "short_description" => "Data analysis is a critical skill in today’s data-driven world, and this blog introduces you to its basics. We cover essential techniques and tools used to interpret and visualize data effectively. Learn about different data analysis methods and how they can be applied to solve real-world problems. Enhance your ability to make informed decisions based on data insights.",
            "date_created" => "2024-03-05"
        ],
        [
            "id" => 4,
            "title_of_blog" => "Project Management Essentials",
            "author" => "David Brown",
            "short_description" => "Effective project management is crucial for delivering successful projects on time and within budget. In this blog, we explore the core principles and practices of project management. From planning and scheduling to risk management and team coordination, we cover all the essentials. Gain practical tips and strategies to enhance your project management skills.",
            "date_created" => "2024-04-20"
        ],
        [
            "id" => 5,
            "title_of_blog" => "Marketing Strategies for 2024",
            "author" => "Eva Davis",
            "short_description" => "As the marketing landscape continues to evolve, it’s important to stay updated with the latest strategies. This blog provides insights into the most effective marketing techniques for 2024. Discover emerging trends, digital marketing tools, and innovative approaches to reaching your target audience. Equip yourself with the knowledge to stay competitive in the fast-paced world of marketing.",
            "date_created" => "2024-05-25"
        ],
        [
            "id" => 6,
            "title_of_blog" => "Financial Planning Tips",
            "author" => "Frank Miller",
            "short_description" => "Sound financial planning is essential for achieving long-term financial stability. In this blog, we share practical tips for managing your finances effectively. Learn about budgeting, saving strategies, investment options, and debt management. Our advice will help you create a solid financial plan and make informed decisions about your money.",
            "date_created" => "2024-06-30"
        ],
        [
            "id" => 7,
            "title_of_blog" => "Web Development Trends",
            "author" => "Grace Wilson",
            "short_description" => "The field of web development is constantly changing with new technologies and practices. This blog explores the latest trends in web development and how they are shaping the future of websites. From responsive design and progressive web apps to the use of AI in web development, stay updated with the trends that matter. Enhance your web development skills and keep your projects at the cutting edge.",
            "date_created" => "2024-07-15"
        ],
        [
            "id" => 8,
            "title_of_blog" => "Sales Strategies That Work",
            "author" => "Hank Moore",
            "short_description" => "Effective sales strategies are key to driving revenue and growing your business. This blog provides actionable insights into sales techniques that deliver results. Learn about prospecting, relationship building, and closing strategies that can boost your sales performance. Implement these strategies to enhance your sales process and achieve your targets.",
            "date_created" => "2024-08-10"
        ],
        [
            "id" => 9,
            "title_of_blog" => "Human Resources Best Practices",
            "author" => "Ivy Taylor",
            "short_description" => "Human resources plays a critical role in managing and supporting an organization’s workforce. This blog covers best practices for HR professionals to effectively manage talent and foster a positive work environment. Topics include recruitment, employee development, performance management, and workplace culture. Enhance your HR practices with our expert tips and insights.",
            "date_created" => "2024-09-05"
        ],
        [
            "id" => 10,
            "title_of_blog" => "Operations Management Insights",
            "author" => "Jack Anderson",
            "short_description" => "Operations management is key to optimizing business processes and ensuring efficiency. This blog offers valuable insights into the principles and practices of effective operations management. Learn about process improvement, resource allocation, and performance metrics to enhance your operations. Discover strategies to streamline your operations and achieve organizational goals.",
            "date_created" => "2024-10-01"
        ]
    ];

    public function index()
    {
        return view('student.user', ['users' => $this->users]);
    }

    public function create()
    {
        return view('student.user-create');
    }

    public function show($id)
    {
        $blog = collect($this->users)->firstWhere('id', $id);

        if (!$blog) {
            abort(404, 'Blog not found');
        }

        return view('student.user-show', ['user' => $blog]);
    }
}
