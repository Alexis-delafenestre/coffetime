<?php

namespace App\DataFixtures;
use app\entity\Produit;
use app\entity\Commentaire; 
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;



class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);


        //produit 1
        $produit1 = new Produit();
        $produit1->setNom('café moulue');
        $produit1->setDescription('Café Parisien de très bonne qualité');
        $produit1->setImage('img/coffee1.jpg');
        $produit1->setStock('40');
        $manager -> persist($produit1); 

        //commentaire 1 lier produit 1
        
        $Commentaire1 = new Commentaire();
        $Commentaire1 -> setTitre('très bon café');
        $Commentaire1 -> setContenue('Lorem ipsum dolor sit amet, consectetur niristique senectus et netus et malesus nec pharetra lectus.');
        $Commentaire1 -> setProduit($produit1);
        $manager -> persist($Commentaire1); 


        //produit 2
        $produit2 = new Produit();
        $produit2->setNom('cafetière');
        $produit2->setDescription('Cafetière à piston');
        $produit2->setImage('img/cafetiere-piston-bodum-chambord-3-tasses.jpg');
        $produit2->setStock('200');
        $manager -> persist($produit2); 

        //commentaire 2 lier produit 2
        /*
        $Commentaire2 = new Commentaire();
        $Commentaire2 -> setTitre('Simple d\utilisation !');
        $Commentaire2 -> setContenue('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum, turpis vel tempus dignissim, nisl mauris lacinia eros, ut mattis odio lorem eget magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus nec pharetra lectus.');
        $Commentaire2 -> setProduit($produit2);
        $manager -> persist($Commentaire2); 

        //Commentaire 3 lier produit 2
    
        $Commentaire3 = new Commentaire();
        $Commentaire3 -> setTitre('très belle cafetière');
        $Commentaire3 -> setContenue('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum, turpis vel tempus dignissim, nisl mauris lacinia eros, ut mattis odio lorem eget magna. Pellentesqu e habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus nec pharetra lectus.');
        $Commentaire3 -> setProduit($produit2);
        $manager -> persist($Commentaire3); 

        //commentaire 4 lier produit 2

        $Commentaire4= new Commentaire();
        $Commentaire4-> setTitre('j\adore !');
        $Commentaire4-> setContenue('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum, turpis vel tempus dignissim, nisl mauris lacinia eros, ut mattis odio lorem eget magna. Pellentesqu e habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus nec pharetra lectus.');
        $Commentaire4-> setProduit($produit2);
        $manager -> persist($Commentaire4); 
        */

        //produit 3
        $produit3 = new Produit();
        $produit3->setNom('cuillère dosette à café');
        $produit3->setDescription('Cuillère pour doser vos meilleurs cafés ');
        $produit3->setImage('img/cuillere-mesure.webp');
        $produit3->setStock('200');
        $manager -> persist($produit3); 

        //commentaire 5 lier produit 3
        /*
        $Commentaire5 = new Commentaire();
        $Commentaire5 -> setTitre('très utile pour doser le café !');
        $Commentaire5 -> setContenue('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum, turpis vel tempus dignissim, nisl mauris lacinia eros, ut mattis odio lorem eget magna. Pellentesqu e habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus nec pharetra lectus.');
        $Commentaire5 -> setProduit($produit3);
        $manager -> persist($Commentaire5); 

        // commentaire 6 lier produit 3

        $Commentaire6 = new Commentaire();
        $Commentaire6 -> setTitre('très utile pour doser le café !');
        $Commentaire6 -> setContenue('Lorem ipsum dolor sit ed vestibulum, turpis vel tempus dignissim, nisl mauris  abitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus nec pharetra lectus.');
        $Commentaire6 -> setProduit($produit3);
        $manager -> persist($Commentaire6); 
        */


        $produit4 = new Produit();
        $produit4->setNom('mug');
        $produit4->setDescription('Mug pour déguster vos délicieux cafés');
        $produit4->setImage('img/Mug.png');
        $produit4->setStock('500');
        $manager -> persist($produit4); 


        $produit5 = new Produit();
        $produit5->setNom('café arabica');
        $produit5->setDescription('très bon café arabica');
        $produit5->setImage('img/coffee-bean.png');
        $produit5->setStock('100');
        $manager -> persist($produit5);

        $produit6 = new Produit();
        $produit6->setNom('Pateau café');
        $produit6->setDescription('jolie plateau pour vos pauses café');
        $produit6->setImage('img/plateau-café.png');
        $produit6->setStock('150');
        $manager -> persist($produit6);

        $produit7 = new Produit();
        $produit7->setNom('Balance');
        $produit7->setDescription('pour le dosage parfait');
        $produit7->setImage('img/Balance-café.png');
        $produit7->setStock('150');
        $manager -> persist($produit7);

        $produit8 = new Produit();
        $produit8->setNom('Moulin à café éléctrique');
        $produit8->setDescription('Pour mouler le café comme il se doit');
        $produit8->setImage('img/mouin-café.png');
        $produit8->setStock('500');
        $manager -> persist($produit8);

        $produit9 = new Produit();
        $produit9->setNom('Tamper');
        $produit9->setDescription('Bien tasser le café');
        $produit9->setImage('img/tamper-café.png');
        $produit9->setStock('150');
        $manager -> persist($produit9);

        $produit10 = new Produit();
        $produit10->setNom('brosse entretient');
        $produit10->setDescription('Pour garder une cafetière toujours propre');
        $produit10->setImage('img/brosse.png');
        $produit10->setStock('150');
        $manager -> persist($produit10);

        
        $manager -> flush();


}

}