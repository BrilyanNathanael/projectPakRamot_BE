<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Article;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        User::create([
            'role' => 'admin',
            'username' => 'Nathan',
            'gender' => 'male',
            'place_birth' => 'Palembang',
            'date_birth' => '2001-07-30',
            'email' => 'brilyannaathan@gmail.com',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'role' => 'admin',
            'username' => 'Andre',
            'gender' => 'male',
            'place_birth' => 'Jakarta',
            'date_birth' => '2001-10-02',
            'email' => 'andre@gmail.com',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'role' => 'member',
            'username' => 'Dini',
            'gender' => 'female',
            'place_birth' => 'Jakarta',
            'date_birth' => '1999-04-12',
            'email' => 'dini@gmail.com',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'role' => 'member',
            'username' => 'Beni',
            'gender' => 'male',
            'place_birth' => 'Jakarta',
            'date_birth' => '1994-05-24',
            'email' => 'beni@gmail.com',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'role' => 'member',
            'username' => 'Meli',
            'gender' => 'female',
            'place_birth' => 'Jakarta',
            'date_birth' => '2005-01-16',
            'email' => 'meli@gmail.com',
            'password' => Hash::make('password123'),
        ]);

        Article::create([
            'title' => 'Best Programming Languages to Learn: Choosing the Right One',
            'username' => 'Nathan',
            'picture' => 'image/1.jpg',
            'content' => 'Not so long ago, only a few people were considered computer programmers, and we viewed them with awe. In the digital age, we now live in; however, many IT jobs require a solid grasp of a programming language, and sometimes more than one. If you’re trying to advance in your career or change careers completely, and you realize you need to master a programming language, you might wonder which one to learn. After all, it will take time and money to learn the language, so you want to make the right choice from the start. Several considerations come into play when making your decision, like the difficulty level you’re willing to learn, the skills you already possess that might align with a language, and your reasons for learning a programming language. Whether you want to develop a mobile application, get a certification for programming knowledge, or learn new skills, you need to choose the right programming language to learn. Below you’ll find seven popular programming languages that are in demand right now among employers. For each, you’ll find a little about the language and the complexity, as well as how it is used. However, don’t let the beginner label dissuade you. Even a programming language described as appropriate for a beginner does get more complicated as you become more proficient and experienced in using it. by the Oracle Corporation, this general-purpose programming language with its object-oriented structure has become a standard for applications that can be used regardless of platform (e.g., Mac, Window, Android, iOS, etc.) because of its Write Once, Run Anywhere (WORA) capabilities. As a result of this capability, Java is recognized for its portability across platforms from mainframe data centers to smartphones. Today there are more than 3 billion devices running applications built with Java. Java is widely used in web and application development as well as Big Data. Java is also used in the backend of several popular websites, including Google, Amazon, Twitter, and YouTube. It is also extensively used in hundreds of applications. New Java frameworks like Spring, Struts, and Hibernate are also very popular. With millions of Java developers worldwide, there are hundreds of texts available for learning Java programming. Also, Java programmers are actively involved in a variety of forums where they vet ideas or solve programming problems. Java has a vast community and gets a lot of support.',
        ]);
    }
}
