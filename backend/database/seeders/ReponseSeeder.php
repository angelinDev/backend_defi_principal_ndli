<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ReponseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('reponses')->insert([
            ['reponse' => 'Les usines pétrolières', 'valeur' => false, 'question_id' => 1],
            ['reponse' => 'Les déchets ménagers mal gérés', 'valeur' => true, 'question_id' => 1],
            ['reponse' => 'Les navires commerciaux', 'valeur' => false, 'question_id' => 1],
            ['reponse' => 'Les barrages hydroélectriques', 'valeur' => false, 'question_id' => 1],

            ['reponse' => '10%', 'valeur' => false, 'question_id' => 2],
            ['reponse' => '5%', 'valeur' => false, 'question_id' => 2],
            ['reponse' => '20%', 'valeur' => false, 'question_id' => 2],
            ['reponse' => '8%', 'valeur' => true, 'question_id' => 2],

            ['reponse' => 'Ils augmentent la fertilité des poissons', 'valeur' => false, 'question_id' => 3],
            ['reponse' => 'Ils perturbent les systèmes digestifs des animaux marins', 'valeur' => true, 'question_id' => 3],
            ['reponse' => 'Ils réduisent la température de l’eau', 'valeur' => false, 'question_id' => 3],
            ['reponse' => 'Ils augmentent la population de certains poissons', 'valeur' => false, 'question_id' => 3],

            ['reponse' => 'La Mer Rouge', 'valeur' => false, 'question_id' => 4],
            ['reponse' => 'Le Pacifique Nord', 'valeur' => true, 'question_id' => 4],
            ['reponse' => 'L’océan Indien', 'valeur' => false, 'question_id' => 4],
            ['reponse' => 'L’Atlantique Sud', 'valeur' => false, 'question_id' => 4],

            ['reponse' => 'Recycler les plastiques usagés', 'valeur' => false, 'question_id' => 5],
            ['reponse' => 'Brûler les déchets plastiques', 'valeur' => false, 'question_id' => 5],
            ['reponse' => 'Augmenter l’utilisation de sacs en plastique', 'valeur' => false, 'question_id' => 5],
            ['reponse' => 'Éviter l’utilisation de plastique à usage unique', 'valeur' => true, 'question_id' => 5],

            ['reponse' => "Le rejet de produits chimiques non traités", 'valeur' => true, 'question_id' => 6],
            ['reponse' => "La surpêche", 'valeur' => false, 'question_id' => 6],
            ['reponse' => "L’élimination des déchets dans les décharges contrôlées", 'valeur' => false, 'question_id' => 6],
            ['reponse' => "Les activités touristiques non responsables", 'valeur' => false, 'question_id' => 6],

            ['reponse' => "Les tortues", 'valeur' => true, 'question_id' => 7],
            ['reponse' => "Les dauphins", 'valeur' => true, 'question_id' => 7],
            ['reponse' => "Les oiseaux marins", 'valeur' => true, 'question_id' => 7],
            ['reponse' => "Les crabes", 'valeur' => false, 'question_id' => 7],

            ['reponse' => "L’Atlantique Nord", 'valeur' => false, 'question_id' => 8],
            ['reponse' => "Le Pacifique Nord (Grande île de déchets)", 'valeur' => true, 'question_id' => 8],
            ['reponse' => "L’océan Indien", 'valeur' => false, 'question_id' => 8],
            ['reponse' => "La mer Méditerranée", 'valeur' => true, 'question_id' => 8],

            ['reponse' => "Bannir les plastiques à usage unique", 'valeur' => true, 'question_id' => 9],
            ['reponse' => "Organiser des opérations de nettoyage des plages", 'valeur' => true, 'question_id' => 9],
            ['reponse' => "Construire plus de stations d’épuration", 'valeur' => true, 'question_id' => 9],
            ['reponse' => "Utiliser davantage de combustibles fossiles", 'valeur' => false, 'question_id' => 9],

            ['reponse' => "La zone de convergence subtropicale", 'valeur' => true, 'question_id' => 10],
            ['reponse' => "L’Arctique", 'valeur' => false, 'question_id' => 10],
            ['reponse' => "La 'Grande île de déchets' dans le Pacifique Nord", 'valeur' => true, 'question_id' => 10],
            ['reponse' => "Les récifs coralliens australiens", 'valeur' => false, 'question_id' => 10],

            ['reponse' => "Perturbation de la chaîne alimentaire", 'valeur' => true, 'question_id' => 11],
            ['reponse' => "Développement de maladies chez les animaux marins", 'valeur' => true, 'question_id' => 11],
            ['reponse' => "Réduction du taux d’oxygène dans l’eau", 'valeur' => true, 'question_id' => 11],
            ['reponse' => "Accroissement de la biodiversité marine", 'valeur' => false, 'question_id' => 11],

            ['reponse' => "Recycler les déchets plastiques", 'valeur' => true, 'question_id' => 12],
            ['reponse' => "Réduire l’utilisation de produits plastiques", 'valeur' => true, 'question_id' => 12],
            ['reponse' => "Utiliser des détergents chimiques biodégradables", 'valeur' => true, 'question_id' => 12],
            ['reponse' => "Augmenter les zones de pêche intensive", 'valeur' => false, 'question_id' => 12],

            ['reponse' => "Pollution plastique", 'valeur' => true, 'question_id' => 13],
            ['reponse' => "Déversements d’hydrocarbures", 'valeur' => true, 'question_id' => 13],
            ['reponse' => "Déchets nucléaires", 'valeur' => false, 'question_id' => 13],
            ['reponse' => "Rejets industriels", 'valeur' => true, 'question_id' => 13],

            ['reponse' => "Réduire la consommation d’électricité mondiale", 'valeur' => false, 'question_id' => 14],
            ['reponse' => "Limiter le réchauffement climatique à 1,5°C par rapport à l’ère préindustrielle", 'valeur' => true, 'question_id' => 14],
            ['reponse' => "Interdire l’utilisation de voitures à essence", 'valeur' => false, 'question_id' => 14],
            ['reponse' => "Augmenter la production de charbon", 'valeur' => false, 'question_id' => 14],

            ['reponse' => "Dioxyde de carbone (CO₂)", 'valeur' => true, 'question_id' => 15],
            ['reponse' => "Méthane (CH₄)", 'valeur' => true, 'question_id' => 15],
            ['reponse' => "Ozone (O₃)", 'valeur' => false, 'question_id' => 15],
            ['reponse' => "Ammoniac (NH₃)", 'valeur' => false, 'question_id' => 15],

            ['reponse' => "Une marée très forte", 'valeur' => false, 'question_id' => 16],
            ['reponse' => "Une énorme quantitié de pétrole déversée dans la mer", 'valeur' => true, 'question_id' => 16],
            ['reponse' => "Une eau pleine de déchets", 'valeur' => false, 'question_id' => 16],
            ['reponse' => "Une eau pleine de déchets", 'valeur' => false, 'question_id' => 16],

            ['reponse' => "En augmentant la production de gaz à effet de serre comme le méthane", 'valeur' => true, 'question_id' => 17],
            ['reponse' => "En favorisant la dégradation des écosystèmes marins absorbant du CO₂", 'valeur' => true, 'question_id' => 17],
            ['reponse' => "En refroidissant les courants marins", 'valeur' => false, 'question_id' => 17],
            ['reponse' => "En augmentant la production d’énergie des océans", 'valeur' => false, 'question_id' => 17],

            ['reponse' => "Fonte des glaciers et augmentation du niveau des mers", 'valeur' => true, 'question_id' => 18],
            ['reponse' => "Acidification des océans", 'valeur' => true, 'question_id' => 18],
            ['reponse' => "Augmentation de la biodiversité marine", 'valeur' => false, 'question_id' => 18],
            ['reponse' => "Blanchiment des coraux", 'valeur' => true, 'question_id' => 18],

            ['reponse' => "Ils absorbent environ 30% du CO₂ émis par les activités humaines", 'valeur' => true, 'question_id' => 19],
            ['reponse' => "Ils réduisent l’effet de serre en refroidissant l’atmosphère", 'valeur' => false, 'question_id' => 19],
            ['reponse' => "Ils jouent un rôle de régulateur thermique grâce aux courants marins", 'valeur' => true, 'question_id' => 19],
            ['reponse' => "Ils réduisent la fonte des glaciers", 'valeur' => false, 'question_id' => 19],

            ['reponse' => "Mort des coraux", 'valeur' => true, 'question_id' => 20],
            ['reponse' => "Diminution des populations de poissons", 'valeur' => true, 'question_id' => 20],
            ['reponse' => "Développement accru de la faune marine", 'valeur' => false, 'question_id' => 20],
            ['reponse' => "Dissolution des coquilles des mollusques et crustacés", 'valeur' => true, 'question_id' => 20],

            ['reponse' => "Réduire les émissions de gaz à effet de serre", 'valeur' => true, 'question_id' => 21],
            ['reponse' => "Limiter la surpêche et protéger les habitats marins", 'valeur' => true, 'question_id' => 21],
            ['reponse' => "Investir dans des technologies de capture du carbone", 'valeur' => true, 'question_id' => 21],
            ['reponse' => "Développer le transport maritime à grande échelle", 'valeur' => false, 'question_id' => 21],

            ['reponse' => "Elles capturent le dioxyde de carbone (CO₂) lors de la photosynthèse", 'valeur' => true, 'question_id' => 22],
            ['reponse' => "Elles réduisent la température des océans", 'valeur' => false, 'question_id' => 22],
            ['reponse' => "Elles fournissent de l’oxygène essentiel à la vie marine", 'valeur' => true, 'question_id' => 22],
            ['reponse' => "Elles augmentent l’acidification des océans", 'valeur' => false, 'question_id' => 22],

            ['reponse' => "Ils sont ingérés par le phytoplancton et perturbent la photosynthèse", 'valeur' => false, 'question_id' => 23],
            ['reponse' => "Ils s'accumulent dans les organismes marins et atteignent les prédateurs via la bioaccumulation", 'valeur' => true, 'question_id' => 23],
            ['reponse' => "Ils augmentent la quantité de nutriments dans l’eau, favorisant les écosystèmes marins", 'valeur' => false, 'question_id' => 23],
            ['reponse' => "Ils bloquent les branchies des poissons, entraînant leur asphyxie", 'valeur' => false, 'question_id' => 23],

            ['reponse' => "Les biphényles polychlorés (PCB)", 'valeur' => true, 'question_id' => 24],
            ['reponse' => "Les hydrocarbures aromatiques polycycliques (HAP)", 'valeur' => true, 'question_id' => 24],
            ['reponse' => "Les composés perfluorés (PFAS)", 'valeur' => true, 'question_id' => 24],
            ['reponse' => "Le dioxyde de soufre (SO₂)", 'valeur' => false, 'question_id' => 24],

            ['reponse' => "Ils s'y concentrent en raison des courants marins circulaires, formant des 'îles de plastique'", 'valeur' => true, 'question_id' => 25],
            ['reponse' => "Ils empêchent l’oxygénation des eaux profondes", 'valeur' => false, 'question_id' => 25],
            ['reponse' => "Ils attirent les animaux marins qui les confondent avec de la nourriture", 'valeur' => true, 'question_id' => 25],
            ['reponse' => "Ils se décomposent rapidement en polluants chimiques toxiques", 'valeur' => false, 'question_id' => 25],

            ['reponse' => "Elle réduit la capacité des algues marines à absorber le CO₂", 'valeur' => true, 'question_id' => 26],
            ['reponse' => "Elle détruit les écosystèmes de mangroves et de récifs coralliens, qui stockent le carbone", 'valeur' => true, 'question_id' => 26],
            ['reponse' => "Elle augmente la concentration de méthane dans l'atmosphère", 'valeur' => false, 'question_id' => 26],
            ['reponse' => "Elle n’a aucun effet sur les puits de carbone océaniques", 'valeur' => false, 'question_id' => 26],

            ['reponse' => "Ce sont des régions où les niveaux d’oxygène sont trop faibles pour la vie marine", 'valeur' => true, 'question_id' => 27],
            ['reponse' => "Elles sont causées par des rejets excessifs de nutriments comme les engrais agricoles", 'valeur' => true, 'question_id' => 27],
            ['reponse' => "Elles attirent les espèces marines migratrices pour la reproduction", 'valeur' => false, 'question_id' => 27],
            ['reponse' => "Elles sont le résultat des émissions de méthane des fonds marins", 'valeur' => false, 'question_id' => 27],

            ['reponse' => "Les récifs coralliens, car le plastique favorise la prolifération de maladies coralliennes", 'valeur' => true, 'question_id' => 28],
            ['reponse' => "Les mangroves, car les déchets bloquent les racines et limitent l'échange d'oxygène", 'valeur' => true, 'question_id' => 28],
            ['reponse' => "Les abysses, car le plastique y est transporté par les courants profonds et se dégrade lentement", 'valeur' => true, 'question_id' => 28],
            ['reponse' => "Les estuaires, car ils accumulent les polluants provenant des rivières", 'valeur' => false, 'question_id' => 28],

            ['reponse' => "10-20 ans", 'valeur' => false, 'question_id' => 29],
            ['reponse' => "50-100 ans", 'valeur' => false, 'question_id' => 29],
            ['reponse' => "200-500 ans", 'valeur' => true, 'question_id' => 29],
            ['reponse' => "Plus de 1 000 ans", 'valeur' => false, 'question_id' => 29],

            ['reponse' => "Ils transportent les déchets vers les côtes, augmentant la pollution côtière", 'valeur' => true, 'question_id' => 30],
            ['reponse' => "Ils créent des gyres océaniques où les plastiques s’accumulent", 'valeur' => true, 'question_id' => 30],
            ['reponse' => "Ils dégradent les plastiques en microparticules", 'valeur' => false, 'question_id' => 30],
            ['reponse' => "Ils réduisent la concentration de polluants en les diluant dans l’océan", 'valeur' => false, 'question_id' => 30],

            ['reponse' => "Elle ralentit la croissance des coraux en limitant leur capacité à produire du carbonate de calcium", 'valeur' => true, 'question_id' => 31],
            ['reponse' => "Elle augmente la diversité des espèces marines dans les récifs", 'valeur' => false, 'question_id' => 31],
            ['reponse' => "Elle provoque la dissolution des squelettes coralliens", 'valeur' => true, 'question_id' => 31],
            ['reponse' => "Elle réduit la capacité des coraux à se reproduire", 'valeur' => true, 'question_id' => 31],

            ['reponse' => "Parce que les courants y convergent, concentrant les déchets plastiques", 'valeur' => true, 'question_id' => 32],
            ['reponse' => "Parce qu'elles sont peu explorées et les déchets s'y accumulent sans surveillance", 'valeur' => false, 'question_id' => 32],
            ['reponse' => "Parce que la température de l'eau y favorise la dégradation rapide du plastique", 'valeur' => false, 'question_id' => 32],
            ['reponse' => "Parce qu'elles sont situées près des grandes zones de pêche industrielle", 'valeur' => false, 'question_id' => 32],

            ['reponse' => "Leur plumage devient couvert de pétrole, réduisant leur capacité à voler et à flotter", 'valeur' => true, 'question_id' => 33],
            ['reponse' => "Ils ingèrent du pétrole en nettoyant leurs plumes, ce qui est toxique", 'valeur' => true, 'question_id' => 33],
            ['reponse' => "Ils deviennent plus résistants aux prédateurs marins", 'valeur' => false, 'question_id' => 33],
            ['reponse' => "Ils perdent leur capacité d’isolation thermique, les exposant au froid", 'valeur' => true, 'question_id' => 33],

            ['reponse' => "Mercure", 'valeur' => true, 'question_id' => 34],
            ['reponse' => "PCB (biphényles polychlorés)", 'valeur' => true, 'question_id' => 34],
            ['reponse' => "Dioxines", 'valeur' => true, 'question_id' => 34],
            ['reponse' => "Oxygène dissous", 'valeur' => false, 'question_id' => 34],

            ['reponse' => "La production de plastique libère des gaz à effet de serre comme le méthane et l’éthylène", 'valeur' => true, 'question_id' => 35],
            ['reponse' => "Les plastiques, en se décomposant dans les océans, libèrent du dioxyde de carbone (CO₂)", 'valeur' => true, 'question_id' => 35],
            ['reponse' => "Les plastiques refroidissent la surface des océans, réduisant les émissions de gaz", 'valeur' => false, 'question_id' => 35],
            ['reponse' => "La combustion des déchets plastiques contribue aux émissions de gaz à effet de serre", 'valeur' => true, 'question_id' => 35],

            ['reponse' => "Les pays d’Asie du Sud-Est", 'valeur' => true, 'question_id' => 36],
            ['reponse' => "Les États-Unis", 'valeur' => true, 'question_id' => 36],
            ['reponse' => "Les pays européens", 'valeur' => false, 'question_id' => 36],
            ['reponse' => "Les petites îles isolées", 'valeur' => false, 'question_id' => 36],

            ['reponse' => "Il accélère la photosynthèse du phytoplancton, augmentant ainsi la séquestration du carbone", 'valeur' => false, 'question_id' => 37],
            ['reponse' => "Il perturbe la circulation océanique, réduisant l'efficacité des puits de carbone océaniques", 'valeur' => true, 'question_id' => 37],
            ['reponse' => "Il favorise l'absorption du CO₂ par les récifs coralliens, réduisant l'acidification des océans", 'valeur' => false, 'question_id' => 37],
            ['reponse' => "Il n'a aucun effet sur la séquestration du carbone, car les océans ne jouent qu'un rôle mineur dans le cycle du carbone", 'valeur' => false, 'question_id' => 37],

            ['reponse' => "La fonte des glaciers diminue la salinité des océans, ce qui ralentit la circulation thermohaline, impactant le climat régional et global", 'valeur' => true, 'question_id' => 38],
            ['reponse' => "Elle augmente la salinité des océans, provoquant une accélération des courants marins et un réchauffement global plus rapide", 'valeur' => false, 'question_id' => 38],
            ['reponse' => "Elle n'affecte pas la salinité, mais augmente la capacité des océans à absorber le CO₂", 'valeur' => false, 'question_id' => 38],
            ['reponse' => "Elle n'a aucune conséquence sur la salinité, mais entraîne une hausse du niveau de la mer qui peut affecter les écosystèmes marins", 'valeur' => false, 'question_id' => 38],

            ['reponse' => "L'acidification des océans résulte directement de la dissolution accrue du dioxyde de carbone (CO₂) dans les eaux marines, ce qui est exacerbée par le réchauffement climatique", 'valeur' => true, 'question_id' => 39],
            ['reponse' => "L'acidification des océans ralentit le réchauffement climatique en absorbant davantage de gaz à effet de serre", 'valeur' => false, 'question_id' => 39],
            ['reponse' => "L'acidification des océans ne dépend pas du réchauffement climatique mais est causée par la pollution chimique de l'eau", 'valeur' => false, 'question_id' => 39],
            ['reponse' => "Le réchauffement climatique réduit l'acidification des océans en accélérant la dégradation du CO₂ dans l'atmosphère", 'valeur' => false, 'question_id' => 39],

            ['reponse' => "Le réchauffement climatique augmente la stratification thermique des océans, réduisant la circulation verticale de l'eau, ce qui favorise les zones mortes marines", 'valeur' => true, 'question_id' => 40],
            ['reponse' => "Les zones mortes marines sont plus sensibles au réchauffement climatique, mais leur impact sur la biodiversité est négligeable", 'valeur' => false, 'question_id' => 40],
            ['reponse' => "Le réchauffement climatique stimule les bactéries dégradant l'oxygène, accélérant ainsi l'émergence des zones mortes", 'valeur' => false, 'question_id' => 40],
            ['reponse' => "Le réchauffement climatique entraîne une concentration plus élevée de nutriments dans l'eau, réduisant l'extension des zones mortes marines", 'valeur' => false, 'question_id' => 40],

            ['reponse' => "La perte de ces écosystèmes réduit la capacité de stockage du carbone des océans et expose les côtes aux vagues et aux tempêtes, exacerbant ainsi les effets du réchauffement climatique", 'valeur' => true, 'question_id' => 41],
            ['reponse' => "La dégradation de ces écosystèmes n'a aucun effet direct sur le réchauffement climatique, mais augmente la pollution locale par des déchets plastiques", 'valeur' => false, 'question_id' => 41],
            ['reponse' => "Leur disparition réduit la biodiversité, mais n'affecte pas directement le climat ou les océans", 'valeur' => false, 'question_id' => 41],
            ['reponse' => "Les mangroves et les herbiers marins, en se dégradant, refroidissent l’eau et aident à compenser le réchauffement climatique", 'valeur' => false, 'question_id' => 41],

            ['reponse' => "Les océans absorbent plus de 90% de l'excès de chaleur généré par les gaz à effet de serre, jouant un rôle essentiel dans la régulation du réchauffement climatique", 'valeur' => true, 'question_id' => 42],
            ['reponse' => "Les océans n'ont aucun rôle significatif dans le stockage de chaleur par rapport à l'atmosphère et aux terres", 'valeur' => false, 'question_id' => 42],
            ['reponse' => "Les océans stockent environ 50% de la chaleur excédentaire, mais leur capacité est en déclin dû à l'acidification et au réchauffement des eaux superficielles", 'valeur' => false, 'question_id' => 42],
            ['reponse' => "Les océans sont un puits de carbone, mais leur rôle dans la régulation de la température est négligeable", 'valeur' => false, 'question_id' => 42],

            ['reponse' => "Une température de surface plus élevée favorise des cyclones plus puissants et fréquents, exacerbés par les effets du réchauffement climatique", 'valeur' => true, 'question_id' => 43],
            ['reponse' => "Les températures plus chaudes réduisent la fréquence des cyclones, mais les rendent moins intenses", 'valeur' => false, 'question_id' => 43],
            ['reponse' => "Les changements dans la température de l'océan n'affectent pas les cyclones, mais influencent uniquement les courants marins", 'valeur' => false, 'question_id' => 43],
            ['reponse' => "Le réchauffement de l'océan diminue l'intensité des cyclones tropicaux, mais aggrave d'autres phénomènes climatiques extrêmes comme les sécheresses", 'valeur' => false, 'question_id' => 43],

            ['reponse' => "La dilatation thermique des eaux océaniques", 'valeur' => true, 'question_id' => 44],
            ['reponse' => "L'augmentation du volume de la glace dans les océans", 'valeur' => false, 'question_id' => 44],
            ['reponse' => "La fonte des glaciers et des calottes glaciaires", 'valeur' => true, 'question_id' => 44],
            ['reponse' => "L'expansion des habitats marins", 'valeur' => false, 'question_id' => 44],

            ['reponse' => "Elle tue directement de nombreuses espèces marines en ingérant du plastique", 'valeur' => true, 'question_id' => 45],
            ['reponse' => "Elle provoque des mutations génétiques chez les poissons", 'valeur' => false, 'question_id' => 45],
            ['reponse' => "Elle perturbe la chaîne alimentaire marine en bloquant les voies de migration", 'valeur' => true, 'question_id' => 45],
            ['reponse' => "Elle affecte l'acidification des océans, menaçant la vie marine", 'valeur' => false, 'question_id' => 45],

            ['reponse' => "L'augmentation des températures accélère la dégradation des plastiques", 'valeur' => true, 'question_id' => 46],
            ['reponse' => "La montée des eaux diminue les capacités de filtration naturelles des océans", 'valeur' => true, 'question_id' => 46],
            ['reponse' => "La réduction de la calotte glaciaire augmente la concentration de microplastiques", 'valeur' => false, 'question_id' => 46],
            ['reponse' => "Le réchauffement des océans augmente leur capacité à dissoudre plus de CO₂", 'valeur' => false, 'question_id' => 46],

            ['reponse' => "La hausse de la température de l'eau entraîne un blanchissement des coraux", 'valeur' => true, 'question_id' => 47],
            ['reponse' => "Les coraux n’ont pas de mécanisme de défense contre la pollution chimique", 'valeur' => false, 'question_id' => 47],
            ['reponse' => "L'acidification des océans rend la calcification des coraux plus difficile", 'valeur' => true, 'question_id' => 47],
            ['reponse' => "Les coraux sont des prédateurs et se nourrissent des déchets plastiques", 'valeur' => false, 'question_id' => 47],

            ['reponse' => "Ils concentrent les plastiques dans des zones spécifiques comme les gyres océaniques", 'valeur' => true, 'question_id' => 48],
            ['reponse' => "Ils les diluent dans toute la colonne d'eau, réduisant ainsi leur impact", 'valeur' => false, 'question_id' => 48],
            ['reponse' => "Ils transportent les polluants vers les zones côtières sans les diffuser dans l'océan", 'valeur' => false, 'question_id' => 48],
            ['reponse' => "Ils empêchent la dispersion des polluants en les piégeant sous la surface", 'valeur' => false, 'question_id' => 48],

            ['reponse' => "Elles produisent de l'oxygène et absorbent le dioxyde de carbone (CO₂)", 'valeur' => true, 'question_id' => 49],
            ['reponse' => "Elles polluent l'eau en absorbant de grandes quantités de plastique", 'valeur' => false, 'question_id' => 49],
            ['reponse' => "Elles réchauffent les eaux océaniques, contribuant ainsi à l'acidification", 'valeur' => false, 'question_id' => 49],
            ['reponse' => "Elles piègent les polluants chimiques, les empêchant de pénétrer dans les écosystèmes marins", 'valeur' => true, 'question_id' => 49],

            ['reponse' => "L'augmentation des émissions de CO₂ dans l’atmosphère, qui sont absorbées par l'océan", 'valeur' => true, 'question_id' => 50],
            ['reponse' => "La déforestation qui réduit la quantité de CO₂ capturé par la végétation terrestre", 'valeur' => false, 'question_id' => 50],
            ['reponse' => "La pollution industrielle qui libère des substances acides dans les océans", 'valeur' => true, 'question_id' => 50],
            ['reponse' => "L'utilisation excessive de fertilisants agricoles qui favorise la croissance de phytoplancton", 'valeur' => false, 'question_id' => 50],

        ]);
    }
}
