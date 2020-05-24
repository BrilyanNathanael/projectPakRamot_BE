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
            'picture' => 'Best-Programming-Languages-to-Start-Learning-Today.jpg',
            'content' => 'Not so long ago, only a few people were considered computer programmers, and we viewed them with awe. In the digital age, we now live in; however, many IT jobs require a solid grasp of a programming language, and sometimes more than one. If you’re trying to advance in your career or change careers completely, and you realize you need to master a programming language, you might wonder which one to learn. After all, it will take time and money to learn the language, so you want to make the right choice from the start. Several considerations come into play when making your decision, like the difficulty level you’re willing to learn, the skills you already possess that might align with a language, and your reasons for learning a programming language. Whether you want to develop a mobile application, get a certification for programming knowledge, or learn new skills, you need to choose the right programming language to learn. Below you’ll find seven popular programming languages that are in demand right now among employers. For each, you’ll find a little about the language and the complexity, as well as how it is used. However, don’t let the beginner label dissuade you. Even a programming language described as appropriate for a beginner does get more complicated as you become more proficient and experienced in using it. by the Oracle Corporation, this general-purpose programming language with its object-oriented structure has become a standard for applications that can be used regardless of platform (e.g., Mac, Window, Android, iOS, etc.) because of its Write Once, Run Anywhere (WORA) capabilities. As a result of this capability, Java is recognized for its portability across platforms from mainframe data centers to smartphones. Today there are more than 3 billion devices running applications built with Java. Java is widely used in web and application development as well as Big Data. Java is also used in the backend of several popular websites, including Google, Amazon, Twitter, and YouTube. It is also extensively used in hundreds of applications. New Java frameworks like Spring, Struts, and Hibernate are also very popular. With millions of Java developers worldwide, there are hundreds of texts available for learning Java programming. Also, Java programmers are actively involved in a variety of forums where they vet ideas or solve programming problems. Java has a vast community and gets a lot of support.',
        ]);

        Article::create([
            'title' => 'Impact of Lifestyle on Health',
            'username' => 'Beni',
            'picture' => 'IJPH-44-1442-g001.jpg',
            'content' => 'Lifestyle is a way used by people, groups and nations and is formed in specific geographical, economic, political, cultural and religious text. Lifestyle is referred to the characteristics of inhabitants of a region in special time and place. It includes day to day behaviors and functions of individuals in job, activities, fun and diet.
            In recent decades, life style as an important factor of health is more interested by researchers. According to WHO, 60% of related factors to individual health and quality of life are correlated to lifestyle (1). Millions of people follow an unhealthy lifestyle. Hence, they encounter illness, disability and even death. Problems like metabolic diseases, joint and skeletal problems, cardio-vascular diseases, hypertension, overweight, violence and so on, can be caused by an unhealthy lifestyle. The relationship of lifestyle and health should be highly considered.
            Today, wide changes have occurred in life of all people. Malnutrition, unhealthy diet, smoking, alcohol consuming, drug abuse, stress and so on, are the presentations of unhealthy life style that they are used as dominant form of lifestyle. Besides, the lives of citizens face with new challenges. For instance, emerging new technologies within IT such as the internet and virtual communication networks, lead our world to a major challenge that threatens the physical and mental health of individuals. The challenge is the overuse and misuse of the technology.
            Therefore, according to the existing studies, it can be said that: lifestyle has a significant influence on physical and mental health of human being. There are different forms of such influences. Consanguinity in some ethnicity is a dominant form of life style that it leads to the genetic disorders. Reformation of this unhealthy life style is a preventing factor for decreasing the rate of genetic diseases (2). In some countries, the overuse of drugs is a major unhealthy life style. Iran is one of the 20 countries using the most medications. They prefer medication to other intervention. Furthermore, in 15–40% of cases they use medications about without prescription (3). Pain relievers, eye drops and antibiotics have the most usage in Iran. While self-medications such as antibiotics have a negative effect on the immune system, if the individual would be affected by infection, antibiotics will not be effective in treatment. Overall, 10 percent of those who are self-medicated will experience severe complications such as drug resistance. Sometimes drug allergy is so severe that it can cause death (4).
            ',
        ]);

        Article::create([
            'title' => 'How Does Food Impact Health?',
            'username' => 'Dini',
            'picture' => 'nutrition main_2.jpg',
            'content' => 'he nutrients in food enable the cells in our bodies to perform their necessary functions. This quote from a popular textbook describes how the nutrients in food are essential for our physical functioning.
            "Nutrients are the nourishing substances in food that are essential for the growth, development and maintenance of body functions. Essential meaning that if a nutrient is not present, aspects of function and therefore human health decline. When nutrient intake does not regularly meet the nutrient needs dictated by the cell activity, the metabolic processes slow down or even stop."
            - Perspectives in Nutrition, Wardlow and Insel One component of Functional Medicine focuses on how diet impacts health and function. When Functional Medicine practitioners examine the role of nutrition in chronic disease, they look at multiple systems, such as the digestive system, the immune system, and the detoxification system, because of the interconnections between those systems. For instance, because 80% of the immune system is contained in the gastrointestinal system, a persons issues with immunity could be related to faulty digestion. Functional Medicine maintains that chronic disease is almost always preceded by a period of declining health in one or more of the bodys systems. Thus, these practitioners seek to identify early the symptoms that indicate underlying dysfunction, possibly leading to disease. One of the ways Functional Medicine seeks to address declining health is to provide the foods and nutrients needed to restore function. This is a cost effective, non-invasive intervention that aims to stop the progression into disease. When taking a nutritional approach to health and disease, it is important to understand that one disease might have multiple causes, and one underlying dysfunction might cause multiple diseases. Cardiovascular disease may be among the clearest examples of this concept. Researchers have shown that the development of heart disease can be triggered by multiple factors. These factors include insulin resistance, elevated homocysteine, oxidative stress, elevated cholesterol, hypertension, heavy metal toxicity, stress, and inflammation. Each of these factors can be influenced by nutrition and each, in turn, impact our nutritional needs. This applies both to the prevention and treatment of these factors (Textbook of Functional Medicine). For example, a 2007 study shows the importance of optimal mineral balance and how a deficiency in mineral balance can contribute to the development of congestive heart failure (Cardiovascular & Hematological Agents in Medicinal Chemistry, 2007).',
        ]);
    }
}
