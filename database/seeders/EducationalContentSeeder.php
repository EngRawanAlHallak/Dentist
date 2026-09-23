<?php

namespace Database\Seeders;

use App\Models\EducationalImage;
use App\Models\EducationalContent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EducationalContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $randomDate = $faker->dateTimeBetween('-30 days', 'now');

        //articles
        EducationalContent::create([
                'supervisor_id' => 8,
                'title' => '8 Smart Habits to Stop Cavities Before They Start',
                'description' => 'Practical daily habits to prevent tooth decay and maintain oral health.',
                'type' => 'article',
                'text_content' => 'Cavities remain one of the most common oral health problems worldwide, but they are almost entirely preventable with consistent care.
                The first habit is brushing your teeth at least twice a day using fluoride toothpaste. Fluoride strengthens the enamel and helps repair early signs of tooth decay.
                Second, flossing once daily is essential because toothbrushes cannot reach the tight spaces between teeth where plaque accumulates.
                Third, drinking water throughout the day helps wash away food particles and bacteria while also stimulating saliva production.
                Fourth, avoid frequent snacking on sugary or acidic foods, as they create an environment where cavity-causing bacteria thrive.
                Fifth, chew sugar-free gum after meals to encourage saliva flow and neutralize acids.
                Sixth, replace your toothbrush every three months, or sooner if the bristles are worn.
                Seventh, visit your dentist regularly for cleanings and early detection of problems.
                Finally, maintain a diet rich in fruits, vegetables, and dairy products that provide calcium and other minerals necessary for strong teeth.
                By adopting these habits consistently, patients can significantly reduce their risk of developing cavities and enjoy a lifetime of healthy smiles.',
                'content_url' => null,
                'file_path' => null,
                'published_at' => $randomDate,
                'stage_id' => 6,
                'appropriate_rating' => 5,
            ]
        );
        EducationalContent::create([
                'supervisor_id' => 9,
                'title' => 'Seven Top Tips to Look After Your Teeth – According to Experts',
                'description' => 'Dental experts share effective strategies for keeping teeth and gums healthy.',
                'type' => 'article',
                'text_content' => 'Maintaining healthy teeth requires more than simply brushing twice a day. Experts recommend seven essential tips for long-term oral health.
                First, practice correct brushing technique by holding the brush at a 45-degree angle and cleaning all surfaces of the teeth, including the tongue.
                Second, floss daily to remove plaque and food debris that brushing alone cannot eliminate.
                Third, use a fluoride-containing mouthwash to add an extra layer of protection against decay.
                Fourth, eat a balanced diet rich in vitamins and minerals, limiting sugar and acidic drinks such as soda and energy beverages.
                Fifth, schedule dental checkups at least every six months, as professional cleanings remove hardened tartar that home care cannot.
                Sixth, avoid harmful habits such as smoking and nail-biting, which damage both the teeth and gums.
                Finally, protect your teeth from injury by wearing a mouthguard during sports activities.
                When followed consistently, these steps help patients not only maintain a beautiful smile but also reduce the risk of gum disease and tooth loss later in life.',
                'content_url' => null,
                'file_path' => null,
                'published_at' => $randomDate,
                'stage_id' => 7,
                'appropriate_rating' => 4.7,
            ]
        );
        EducationalContent::create([
                'supervisor_id' => 10,
                'title' => 'Oral Hygiene – NIH NIDCR',
                'description' => 'Official NIH recommendations for maintaining oral hygiene.',
                'type' => 'article',
                'text_content' => 'The National Institute of Dental and Craniofacial Research (NIDCR) emphasizes that oral hygiene is a lifelong practice that directly impacts general health.
                Good oral hygiene begins with brushing your teeth at least twice a day for two full minutes using fluoride toothpaste.
                Flossing once daily helps remove plaque between teeth and along the gum line, where periodontal disease often begins.
                The NIH also highlights the importance of replacing your toothbrush regularly to maintain effective cleaning.
                Oral hygiene goes beyond daily care—visits to the dentist for professional cleaning are crucial because plaque can harden into tartar, which cannot be removed by brushing alone.
                Untreated tartar buildup leads to gum inflammation, bleeding, and eventually tooth loss.
                Maintaining oral hygiene has systemic health benefits, reducing risks associated with cardiovascular disease, diabetes, and respiratory infections.
                The NIDCR encourages individuals to view oral hygiene not just as a cosmetic concern but as a critical component of overall wellness.',
                'content_url' => null,
                'file_path' => null,
                'published_at' => $randomDate,
                'stage_id' => 3,
                'appropriate_rating' => 5,
            ]
        );
        EducationalContent::create([
                'supervisor_id' => 8,
                'title' => 'Oral Hygiene: Best Practices for Good Routine',
                'description' => 'Cleveland Clinic guidelines on oral hygiene.',
                'type' => 'article',
                'text_content' => 'The Cleveland Clinic outlines a series of best practices for oral hygiene that are essential for patients of all ages.
                Brushing with a soft-bristled toothbrush and fluoride toothpaste twice a day ensures the removal of plaque, which if left untreated leads to cavities and gum disease.
                Flossing once a day eliminates bacteria from areas unreachable by toothbrush bristles, and rinsing with an antimicrobial mouthwash helps control plaque-causing bacteria.
                Patients should limit their intake of sugary snacks and drinks, as frequent sugar exposure feeds harmful bacteria that produce acids leading to enamel erosion.
                Dentists also stress the importance of lifestyle habits such as avoiding tobacco and alcohol, which significantly increase the risk of oral cancer.
                For patients with braces, dental implants, or other restorative devices, using interdental brushes and water flossers is recommended.
                Regular dental checkups complete the routine, as professional intervention ensures that early signs of decay or gum disease are addressed promptly.
                Together, these practices form a comprehensive oral care routine that supports both oral and systemic health.',
                'content_url' => null,
                'file_path' => null,
                'published_at' => $randomDate,
                'stage_id' => 3,
                'appropriate_rating' => 4.8,
            ]
        );
        EducationalContent::create([
                'supervisor_id' => 9,
                'title' => 'Oral Hygiene: Best Practices for Good Routine',
                'description' => 'Cleveland Clinic guidelines on oral hygiene.',
                'type' => 'article',
                'text_content' => 'The Cleveland Clinic outlines a series of best practices for oral hygiene that are essential for patients of all ages.
                Brushing with a soft-bristled toothbrush and fluoride toothpaste twice a day ensures the removal of plaque, which if left untreated leads to cavities and gum disease.
                Flossing once a day eliminates bacteria from areas unreachable by toothbrush bristles, and rinsing with an antimicrobial mouthwash helps control plaque-causing bacteria.
                Patients should limit their intake of sugary snacks and drinks, as frequent sugar exposure feeds harmful bacteria that produce acids leading to enamel erosion.
                Dentists also stress the importance of lifestyle habits such as avoiding tobacco and alcohol, which significantly increase the risk of oral cancer.
                For patients with braces, dental implants, or other restorative devices, using interdental brushes and water flossers is recommended.
                Regular dental checkups complete the routine, as professional intervention ensures that early signs of decay or gum disease are addressed promptly.
                Together, these practices form a comprehensive oral care routine that supports both oral and systemic health.',
                'content_url' => null,
                'file_path' => null,
                'published_at' => $randomDate,
                'stage_id' => 7,
                'appropriate_rating' => 4.8,
            ]
        );
        EducationalContent::create([
                'supervisor_id' => 10,
                'title' => 'Everything You Need to Know to Keep Your Teeth Healthy',
                'description' => 'Washington Post guide for daily oral health maintenance.',
                'type' => 'article',
                'text_content' => 'Healthy teeth are the foundation of a confident smile and overall well-being.
                Maintaining them requires more than just an occasional brush. Dentists recommend brushing at least twice daily with a fluoride toothpaste.
                Technique is just as important as frequency—hold the brush at a 45-degree angle and use gentle circular motions to clean all surfaces, including the gumline.
                Flossing daily ensures that plaque and food debris do not accumulate between teeth, areas where most cavities and gum disease begin.
                Regular dental visits, typically every six months, allow for professional cleanings that remove tartar and for early detection of problems.
                Diet plays a key role in oral health. Consuming high-sugar snacks and acidic beverages weakens enamel and promotes decay. Instead, patients should focus on calcium-rich foods like milk, cheese, and leafy greens, which strengthen enamel and bone.
                Water is another key ally, as it rinses away food particles and helps neutralize harmful acids.
                Finally, protective measures such as wearing a mouthguard during sports and avoiding habits like nail-biting or chewing ice can prevent fractures and enamel wear.
                Following these guidelines ensures strong, healthy teeth for a lifetime.',
                'content_url' => null,
                'file_path' => null,
                'published_at' => $randomDate,
                'stage_id' => 3,
                'appropriate_rating' => 4.9,
            ]
        );
        EducationalContent::create([
                'supervisor_id' => 8,
                'title' => 'What to Do for Healthy Teeth and Gums',
                'description' => 'Medical News Today guide for maintaining healthy gums and teeth.',
                'type' => 'article',
                'text_content' => 'Oral health is closely tied to overall health, and healthy teeth and gums play a critical role in daily life.
                The first step to achieving good oral health is developing proper brushing habits. Brush for two full minutes using fluoride toothpaste, and ensure the toothbrush covers all surfaces, including the tongue where bacteria often accumulate.
                Flossing once daily prevents the buildup of plaque between teeth, reducing the risk of gum disease and cavities.
                Mouth rinses with antimicrobial properties can further control bacteria and reduce gum inflammation.
                In addition to hygiene, diet is a powerful determinant of oral health. Limit sugar intake, as frequent sugar exposure creates an environment where harmful bacteria thrive. Increase intake of vegetables, fruits, and dairy products that supply calcium and vitamins essential for gum tissue and tooth enamel.
                Lifestyle habits matter as well—tobacco and alcohol use are strongly linked to gum disease and oral cancers. Patients should also manage stress, as stress is linked to teeth grinding and gum problems.
                Finally, professional dental visits complete the equation, ensuring preventive care and early treatment of any dental issue.
                These combined efforts promote not just a healthy smile, but a healthier body overall.',
                'content_url' => null,
                'file_path' => null,
                'published_at' => $randomDate,
                'stage_id' => 3,
                'appropriate_rating' => 4.6,
            ]
        );
        EducationalContent::create([
                'supervisor_id' => 9,
                'title' => 'Nutrition and Oral Health – ADA',
                'description' => 'American Dental Association insights on how diet affects oral health.',
                'type' => 'article',
                'text_content' => 'The American Dental Association (ADA) emphasizes that diet and nutrition play an essential role in oral health.
                Frequent consumption of sugar and refined carbohydrates feeds bacteria that produce acids responsible for tooth decay.
                Sugary drinks like sodas, energy drinks, and fruit juices are particularly harmful because they coat teeth in acid and sugar for extended periods.
                On the other hand, foods rich in calcium, such as dairy products, leafy greens, and almonds, help strengthen enamel and bone.
                Phosphorus-rich foods, such as meat, eggs, and fish, also contribute to mineralization of teeth.
                Fruits and vegetables provide not only vitamins but also mechanical cleaning of teeth due to their fibrous texture.
                The ADA advises patients to drink plenty of fluoridated water to rinse away bacteria and maintain a moist mouth, which is essential for saliva production.
                Saliva acts as the body’s natural defense against cavities by neutralizing acids and supplying essential minerals for enamel repair.
                Patients should be counseled on how snacking patterns affect oral health. Eating sugary snacks frequently throughout the day is worse than consuming them in one sitting, as it prolongs acid attacks on enamel.
                Dentists play a key role in providing dietary counseling, making nutrition an integral part of preventive dental care.',
                'content_url' => null,
                'file_path' => null,
                'published_at' => $randomDate,
                'stage_id' => 3,
                'appropriate_rating' => 5,
            ]
        );
        EducationalContent::create([
                'supervisor_id' => 10,
                'title' => 'Why Oral Care Is Important for Patients with Diabetes',
                'description' => 'Colgate professional guide for managing oral health in diabetic patients.',
                'type' => 'article',
                'text_content' => 'Diabetes and oral health are closely linked, and patients with diabetes are at a higher risk of developing gum disease, infections, and delayed healing after dental procedures.
                Elevated blood sugar levels create an environment where bacteria thrive, increasing the risk of periodontal disease.
                Gum disease, in turn, can make it harder for patients to control blood sugar, creating a cycle that worsens both conditions.
                For diabetic patients, oral hygiene must be meticulous. Brushing twice daily, flossing, and using antibacterial mouth rinses reduce harmful bacteria.
                Patients should also monitor for early signs of gum problems, such as redness, swelling, or bleeding during brushing, and seek prompt dental care.
                Dietary management plays a dual role: controlling blood sugar levels and protecting teeth from decay.
                Dentists should educate diabetic patients about the importance of regular dental checkups, ideally every 3 to 4 months instead of the usual 6-month interval.
                In addition, smokers with diabetes have an even higher risk of oral health complications and should be counseled on cessation.
                Through proper collaboration between dental professionals and physicians, patients with diabetes can maintain both good oral health and improved overall outcomes.',
                'content_url' => null,
                'file_path' => null,
                'published_at' => $randomDate,
                'stage_id' => 7,
                'appropriate_rating' => 4.8,
            ]
        );
        EducationalContent::create([
                'supervisor_id' => 8,
                'title' => 'Guidelines for Effective Patient Conversations',
                'description' => 'Tips for dentists to communicate with patients effectively.',
                'type' => 'article',
                'text_content' => 'Communication between dentists and patients is just as important as clinical skills in ensuring positive treatment outcomes.
                Many patients experience dental anxiety, which can prevent them from seeking necessary care.
                Dentists can address this by using simple, non-technical language to explain procedures and treatment options.
                Active listening is crucial—patients need to feel that their concerns and fears are being heard.
                Body language, tone of voice, and maintaining eye contact all contribute to building trust.
                Educational tools such as diagrams, models, and videos can help patients visualize their condition and the treatment process.
                Cultural sensitivity and awareness of patient backgrounds are also important, as beliefs about dental care vary across communities.
                Dentists should encourage patients to ask questions and repeat back key information to ensure understanding.
                Follow-up communication after appointments, such as phone calls or emails, reinforces instructions and builds long-term relationships.
                By focusing on empathetic, clear, and consistent communication, dental professionals can improve compliance, reduce anxiety, and ultimately provide better care.',
                'content_url' => null,
                'file_path' => null,
                'published_at' => $randomDate,
                'stage_id' => 6,
                'appropriate_rating' => 4.7,
            ]
        );


        //youtube link
        EducationalContent::create([
                'supervisor_id' => 9,
                'title' => 'Basic Dental Terminology Explained for Students',
                'description' => 'This lecture video explains common dental terms, abbreviations, and charting methods used in clinics and dental schools.',
                'type' => 'link',
                'text_content' => null,
                'content_url' => 'https://www.youtube.com/watch?v=scJH8HA8zAM',
                'file_path' => null,
                'published_at' => $randomDate,
                'stage_id' => 7,
                'appropriate_rating' => 4.9,
            ]
        );
        EducationalContent::create([
                'supervisor_id' => 10,
                'title' => 'Oral and General Health – Animated Overview',
                'description' => 'A short but detailed animated video showing how oral health impacts cardiovascular disease, diabetes, and systemic conditions.',
                'type' => 'link',
                'text_content' => null,
                'content_url' => 'https://www.youtube.com/watch?v=Ge9WGTp5y3o',
                'file_path' => null,
                'published_at' => $randomDate,
                'stage_id' => 3,
                'appropriate_rating' => 4.7,
            ]
        );
        EducationalContent::create([
                'supervisor_id' => 8,
                'title' => 'What to Expect at Your Dentist Visit',
                'description' => 'A patient-focused educational video covering initial consultation, radiographs, scaling, polishing, and dental exam.',
                'type' => 'link',
                'text_content' => null,
                'content_url' => 'https://www.youtube.com/watch?v=zCmiCXkyEHE',
                'file_path' => null,
                'published_at' => $randomDate,
                'stage_id' => 7,
                'appropriate_rating' => 4.5,
            ]
        );
        EducationalContent::create([
                'supervisor_id' => 9,
                'title' => 'How Teeth Are Cleaned at the Dentist',
                'description' => 'Demonstrates the step-by-step professional dental cleaning process including scaling, polishing, and fluoride application.',
                'type' => 'link',
                'text_content' => null,
                'content_url' => 'https://www.youtube.com/watch?v=wrdEE8Br7Zk',
                'file_path' => null,
                'published_at' => $randomDate,
                'stage_id' => 6,
                'appropriate_rating' => 4.8,
            ]
        );
        EducationalContent::create([
                'supervisor_id' => 10,
                'title' => 'Every Dentistry Diagnosis You NEED to Know When Seeing Patients',
                'description' => 'A comprehensive student-level guide on diagnosing caries, periodontal disease, malocclusion, and oral lesions.',
                'type' => 'link',
                'text_content' => null,
                'content_url' => 'https://www.youtube.com/watch?v=cYy_oSVTAAs',
                'file_path' => null,
                'published_at' => $randomDate,
                'stage_id' => 7,
                'appropriate_rating' => 5,
            ]
        );
        EducationalContent::create([
                'supervisor_id' => 8,
                'title' => 'Treatment Planning Made Easy!',
                'description' => 'Explains the sequence of treatment planning: history taking, diagnosis, preventive care, restorative treatment, and follow-ups.',
                'type' => 'link',
                'text_content' => null,
                'content_url' => 'https://www.youtube.com/watch?v=qfVbOmCmka4',
                'file_path' => null,
                'published_at' => $randomDate,
                'stage_id' => 7,
                'appropriate_rating' => 4.9,
            ]
        );
        EducationalContent::create([
                'supervisor_id' => 9,
                'title' => 'Dentistry Today – Clinical Case Reviews',
                'description' => 'A professional channel sharing detailed case reviews including prosthodontics, endodontics, and restorative dentistry.',
                'type' => 'link',
                'text_content' => null,
                'content_url' => 'https://www.youtube.com/channel/UCQvWyiTwaxx568JmNDjR2gQ',
                'file_path' => null,
                'published_at' => $randomDate,
                'stage_id' => 7,
                'appropriate_rating' => 4.6,
            ]
        );
        EducationalContent::create([
                'supervisor_id' => 10,
                'title' => 'Oral Surgery Basics – Extractions and Techniques',
                'description' => 'Covers indications for tooth extraction, surgical instruments, and anesthesia techniques for dental students.',
                'type' => 'link',
                'text_content' => null,
                'content_url' => 'https://www.youtube.com/watch?v=7EyKX5NEtgY',
                'file_path' => null,
                'published_at' => $randomDate,
                'stage_id' => 8,
                'appropriate_rating' => 4.8,
            ]
        );
        EducationalContent::create([
                'supervisor_id' => 8,
                'title' => 'Endodontics Explained – Root Canal Treatment Step by Step',
                'description' => 'Step-by-step endodontic therapy including diagnosis, isolation, pulp removal, cleaning, shaping, and obturation.',
                'type' => 'link',
                'text_content' => null,
                'content_url' => 'https://www.youtube.com/watch?v=YJjXK3rWug8',
                'file_path' => null,
                'published_at' => $randomDate,
                'stage_id' => 6,
                'appropriate_rating' => 5,
            ]
        );
        EducationalContent::create([
                'supervisor_id' => 9,
                'title' => 'Mental Dental – Board Exam Review for Dental Students',
                'description' => 'Highly detailed review sessions covering dental anatomy, pathology, and pharmacology—useful for clinical exams.',
                'type' => 'link',
                'text_content' => null,
                'content_url' => 'https://www.youtube.com/@mentaldental',
                'file_path' => null,
                'published_at' => $randomDate,
                'stage_id' => 7,
                'appropriate_rating' => 5,
            ]
        );


        //pdf
        EducationalContent::create([
                'supervisor_id' => 10,
                'title' => 'Oral Health and Hygiene Lecture',
                'description' => 'Comprehensive lecture handout covering oral hygiene practices, denture care, and when to seek dental attention.',
                'type' => 'pdf',
                'text_content' => null,
                'content_url' => null,
                'file_path' => 'educational_files/Oral Health and Hygiene.pdf',
                'published_at' => $randomDate,
                'stage_id' => 3,
                'appropriate_rating' => 4.7,
            ]
        );

        EducationalContent::create([
                'supervisor_id' => 8,
                'title' => 'Dental Biomaterials – Lecture 1 Intro',
                'description' => 'University of Alberta’s lecture on dental biomaterials, covering synthetic vs biological materials, biocompatibility, and restoration science.',
                'type' => 'pdf',
                'text_content' => null,
                'content_url' => null,
                'file_path' => 'educational_files/BioMat_1&2.pdf',
                'published_at' => $randomDate,
                'stage_id' => 7,
                'appropriate_rating' => 5,
            ]
        );
        EducationalContent::create([
                'supervisor_id' => 9,
                'title' => 'Dental Materials – Dr. Rababaah Lectures',
                'description' => 'Lecture slides detailing the history and development of dental materials across disciplines in dentistry.',
                'type' => 'pdf',
                'text_content' => null,
                'content_url' => null,
                'file_path' => 'educational_files/dental_materials.pdf',
                'published_at' => $randomDate,
                'stage_id' => 7,
                'appropriate_rating' => 4.7,
            ]
        );
        EducationalContent::create([
                'supervisor_id' => 10,
                'title' => 'Oral Health & Diseases Flipchart (WHO)',
                'description' => 'WHO flipchart-style lecture PDF for healthcare providers on common oral diseases, symptoms, and preventative measures.',
                'type' => 'pdf',
                'text_content' => null,
                'content_url' => null,
                'file_path' => 'educational_files/oral-health.pdf',
                'published_at' => $randomDate,
                'stage_id' => 3,
                'appropriate_rating' => 4.8,
            ]
        );
        EducationalContent::create([
                'supervisor_id' => 8,
                'title' => 'Dental School Prep – Dentition Basics',
                'description' => 'Introductory lecture PDF on primary vs. permanent teeth, naming conventions, and numbering systems.',
                'type' => 'pdf',
                'text_content' => null,
                'content_url' => null,
                'file_path' => 'educational_files/Dental-School-Prep.pdf',
                'published_at' => $randomDate,
                'stage_id' => 2,
                'appropriate_rating' => 4.7,
            ]
        );

        ///images
        EducationalContent::create([
                'supervisor_id' => 9,
                'title' => 'Composite Filling for Cavity',
                'description' => 'Patient presented with a Class II cavity on the molar. The treatment involved removing decayed tissue, etching, bonding, and applying composite resin to restore tooth structure and function.',
                'type' => 'image',
                'text_content' => null,
                'content_url' => null,
                'file_path' => null,
                'published_at' => $randomDate,
                'stage_id' => 6,
                'appropriate_rating' => 5,
            ]
        );
        EducationalImage::create([
            'educational_content_id' => 26,
            'image_url' => 'educational_images/composite_filling.jpg',
        ]);

        EducationalContent::create([
                'supervisor_id' => 10,
                'title' => 'Root Canal Treatment',
                'description' => 'Patient had irreversible pulpitis in an upper premolar. The procedure included access cavity preparation, pulp removal, cleaning and shaping of canals, irrigation, and obturation with gutta-percha.',
                'type' => 'image',
                'text_content' => null,
                'content_url' => null,
                'file_path' => null,
                'published_at' => $randomDate,
                'stage_id' => 6,
                'appropriate_rating' => 5,
            ]
        );
        EducationalImage::create([
            'educational_content_id' => 27,
            'image_url' => 'educational_images/root_canal.jpg',
        ]);

        EducationalContent::create([
                'supervisor_id' => 8,
                'title' => 'Tooth Extraction for Impacted Wisdom Tooth',
                'description' => 'The patient had an impacted lower third molar causing pericoronitis. The extraction involved flap reflection, bone removal, tooth sectioning, and careful removal to prevent nerve injury.',
                'type' => 'image',
                'text_content' => null,
                'content_url' => null,
                'file_path' => null,
                'published_at' => $randomDate,
                'stage_id' => 8,
                'appropriate_rating' => 5,
            ]
        );
        EducationalImage::create([
            'educational_content_id' => 28,
            'image_url' => 'educational_images/wisdom_tooth_extraction.jpg',
        ]);

        EducationalContent::create([
                'supervisor_id' => 9,
                'title' => 'Dental Implant Placement',
                'description' => 'Patient had a missing mandibular first molar. Treatment involved flap reflection, osteotomy preparation, implant insertion, and suturing. Post-operative healing was monitored before crown placement.',
                'type' => 'image',
                'text_content' => null,
                'content_url' => null,
                'file_path' => null,
                'published_at' => $randomDate,
                'stage_id' => 5,
                'appropriate_rating' => 5,
            ]
        );
        EducationalImage::create([
            'educational_content_id' => 29,
            'image_url' => 'educational_images/dental_implant.jpg',
        ]);

        EducationalContent::create([
                'supervisor_id' => 10,
                'title' => 'Gingivectomy for Periodontal Pocket',
                'description' => 'Patient presented with deep periodontal pockets in the anterior region. Gingivectomy involved excising excess gingival tissue, reshaping the gingiva, and improving access for oral hygiene.',
                'type' => 'image',
                'text_content' => null,
                'content_url' => null,
                'file_path' => null,
                'published_at' => $randomDate,
                'stage_id' => 4,
                'appropriate_rating' => 4.8,
            ]
        );
        EducationalImage::create([
            'educational_content_id' => 30,
            'image_url' => 'educational_images/gingivectomy.jpg',
        ]);

        EducationalContent::create([
                'supervisor_id' => 8,
                'title' => 'Orthodontic Bracket Bonding',
                'description' => 'Patient with mild crowding. Procedure involved cleaning enamel, etching, bonding adhesive application, and bracket placement for fixed orthodontic treatment.',
                'type' => 'image',
                'text_content' => null,
                'content_url' => null,
                'file_path' => null,
                'published_at' => $randomDate,
                'stage_id' => 1,
                'appropriate_rating' => 4.9,
            ]
        );
        EducationalImage::create([
            'educational_content_id' => 31,
            'image_url' => 'educational_images/bracket_bonding.jpg',
        ]);

        EducationalContent::create([
                'supervisor_id' => 9,
                'title' => 'Scaling and Root Planing',
                'description' => 'Patient diagnosed with moderate periodontitis. Procedure included ultrasonic scaling, hand instrumentation to remove plaque and calculus, and smoothing of root surfaces to reduce bacterial colonization.',
                'type' => 'image',
                'text_content' => null,
                'content_url' => null,
                'file_path' => null,
                'published_at' => $randomDate,
                'stage_id' => 4,
                'appropriate_rating' => 4.8,
            ]
        );
        EducationalImage::create([
            'educational_content_id' => 32,
            'image_url' => 'educational_images/scaling_root_planing.jpg',
        ]);

        EducationalContent::create([
                'supervisor_id' => 10,
                'title' => 'Composite Veneer Application',
                'description' => 'Patient had enamel discoloration on maxillary incisors. Procedure included minimal enamel preparation, etching, adhesive application, and incremental composite layering to restore aesthetics.',
                'type' => 'image',
                'text_content' => null,
                'content_url' => null,
                'file_path' => null,
                'published_at' => $randomDate,
                'stage_id' => 6,
                'appropriate_rating' => 5,
            ]
        );
        EducationalImage::create([
            'educational_content_id' => 33,
            'image_url' => 'educational_images/composite_veneer.jpg',
        ]);

        EducationalContent::create([
                'supervisor_id' => 8,
                'title' => 'Crown Preparation for Posterior Tooth',
                'description' => 'Patient had a fractured molar. Procedure included reduction of occlusal and axial surfaces, margin design, impression taking, and provisional crown placement before final restoration.',
                'type' => 'image',
                'text_content' => null,
                'content_url' => null,
                'file_path' => null,
                'published_at' => $randomDate,
                'stage_id' => 7,
                'appropriate_rating' => 5,
            ]
        );
        EducationalImage::create([
            'educational_content_id' => 34,
            'image_url' => 'educational_images/crown_preparation.jpg',
        ]);

        EducationalContent::create([
                'supervisor_id' => 9,
                'title' => 'Full Mouth Rehabilitation',
                'description' => 'Patient with multiple missing teeth and worn dentition. Treatment plan involved extractions, implants, crowns, and bridges to restore function, aesthetics, and occlusion.',
                'type' => 'image',
                'text_content' => null,
                'content_url' => null,
                'file_path' => null,
                'published_at' => $randomDate,
                'stage_id' => 5,
                'appropriate_rating' => 5,
            ]
        );
        EducationalImage::create([
            'educational_content_id' => 35,
            'image_url' => 'educational_images/full_mouth_rehab.jpg',
        ]);

    }
}
