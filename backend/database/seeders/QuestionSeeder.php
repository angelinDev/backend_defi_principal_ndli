<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('questions')->insert([
            ['question' => 'Quelle est la principale source de pollution plastique dans les océans ?'],
            ['question' => 'Quel pourcentage des déchets plastiques finit dans les océans chaque année ?'],
            ['question' => 'Quel est l’impact majeur des microplastiques sur la faune marine ?'],
            ['question' => 'Quelle région est surnommée la "soupe de plastique" ?'],
            ['question' => 'Quelle solution est la plus efficace pour réduire la pollution plastique ?'],
            ['question' => 'Quelles actions humaines aggravent la pollution des océans ?'],
            ['question' => 'Quels animaux marins sont les plus touchés par les déchets plastiques ?'],
            ['question' => 'Où se trouvent les plus grandes accumulations de déchets plastiques dans les océans ?'],
            ['question' => 'Quelles solutions pourraient réduire la pollution des océans ?'],
            ['question' => 'Quelles régions marines sont connues pour accumuler des déchets plastiques en grande quantité ?'],
            ['question' => 'Quelles sont les conséquences de la pollution plastique sur les écosystèmes marins ?'],
            ['question' => 'Quelles actions peuvent réduire la pollution des océans ?'],
            ['question' => 'Quels sont les principaux types de pollution qui affectent les océans ?'],
            ['question' => 'Quel est l’objectif principal de l’Accord de Paris sur le climat ?'],
            ['question' => 'Quels gaz sont émis lors de la décomposition de certains plastiques dans l’océan ?'],
            ['question' => 'Qu’est-ce qu’une marée noire ?'],
            ['question' => 'Comment la pollution des océans contribue-t-elle au réchauffement climatique ?'],
            ['question' => 'Quels impacts le réchauffement climatique a-t-il sur les océans ?'],
            ['question' => 'Pourquoi les océans sont-ils essentiels dans la lutte contre le réchauffement climatique ?'],
            ['question' => 'Quelles sont les conséquences de l’acidification des océans ?'],
            ['question' => 'Quelles solutions pourraient aider à protéger les océans tout en luttant contre le réchauffement climatique ?'],
            ['question' => 'Quel rôle les algues marines jouent-elles dans la lutte contre le réchauffement climatique ?'],
            ['question' => 'Quel est l’impact des microplastiques sur la chaîne alimentaire marine ?'],
            ['question' => 'Quels produits chimiques contenus dans les déchets marins sont les plus toxiques pour les organismes marins ?'],
            ['question' => 'Pourquoi les déchets plastiques sont-ils plus dangereux dans les gyres océaniques ?'],
            ['question' => 'Comment la pollution des océans impacte-t-elle le rôle des océans en tant que puits de carbone ?'],
            ['question' => 'Quel est le rôle des zones mortes dans les océans, et comment sont-elles liées à la pollution ?'],
            ['question' => 'Quels écosystèmes marins sont les plus vulnérables à la pollution plastique, et pourquoi ?'],
            ['question' => 'Quelle est la durée moyenne de décomposition des déchets plastiques dans l’océan ?'],
            ['question' => 'Comment les courants marins influencent-ils la dispersion de la pollution plastique ?'],
            ['question' => 'Quel est l’impact de l’acidification des océans sur les récifs coralliens ?'],
            ['question' => 'Pourquoi les zones de gyres océaniques sont-elles appelées des "zones de piège à plastique" ?'],
            ['question' => 'Quels sont les effets des marées noires sur les oiseaux marins ?'],
            ['question' => 'Quels sont les principaux polluants chimiques qui s’accumulent dans la chaîne alimentaire marine ?'],
            ['question' => 'Quelle est la relation entre la pollution plastique et l’émission de gaz à effet de serre ?'],
            ['question' => 'Quels sont les pays ou régions les plus responsables de la pollution plastique dans les océans ?'],
            ['question' => 'Comment le réchauffement climatique modifie-t-il la capacité des océans à séquestrer le carbone ?'],
            ['question' => 'Comment la fonte des glaciers et des calottes glaciaires influence-t-elle la salinité et la densité de l’eau des océans, et quelles conséquences cela a-t-il sur le climat mondial ?'],
            ['question' => 'Quelle est la relation entre l’acidification des océans et le réchauffement climatique ?'],
            ['question' => 'Quelle est l’interaction entre les zones mortes marines (zones hypoxiques) et les effets du réchauffement climatique ?'],
            ['question' => 'Comment la dégradation des écosystèmes côtiers, comme les mangroves et les herbiers marins, peut-elle aggraver les effets du réchauffement climatique et de la pollution des océans ?'],
            ['question' => 'Quelle est la contribution relative des océans à la régulation du réchauffement climatique en termes de stockage de chaleur ?'],
            ['question' => 'Comment les changements dans la température des océans affectent-ils les cyclones et autres phénomènes climatiques extrêmes ?'],
            ['question' => 'Quelle est la principale cause de l’élévation du niveau de la mer en lien avec le réchauffement climatique ?'],
            ['question' => 'Quel est l’impact de la pollution plastique sur la biodiversité marine ?'],
            ['question' => 'Quelle conséquence du réchauffement climatique amplifie la pollution des océans ?'],
            ['question' => 'Pourquoi les récifs coralliens sont-ils particulièrement vulnérables aux effets du réchauffement climatique et à la pollution ?'],
            ['question' => 'Comment les courants océaniques peuvent-ils aider à transporter les plastiques et autres polluants ?'],
            ['question' => 'Quel rôle jouent les algues dans la régulation du climat et l’atténuation des effets de la pollution des océans ?'],
            ['question' => 'Quelles actions humaines exacerbent l’acidification des océans en lien avec le réchauffement climatique ?'],
        ]);
    }
}
