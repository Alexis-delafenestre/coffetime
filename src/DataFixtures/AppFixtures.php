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
        $produit1->setImage('images/coffee1.jpg');
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
        $produit2->setImage('images/cafetiere-piston');
        $produit2->setStock('200');
        $manager -> persist($produit2); 

        //commentaire 2 lier produit 2

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


        //produit 3
        $produit3 = new Produit();
        $produit3->setNom('cuillère dosette à café');
        $produit3->setDescription('Cuillère pour doser vos meilleurs cafés ');
        $produit3->setImage('images/cuillere-mesure.webp');
        $produit3->setStock('200');
        $manager -> persist($produit3); 

        //commentaire 5 lier produit 3

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


        $produit4 = new Produit();
        $produit4->setNom('cafetière');
        $produit4->setDescription('Cafetière à piston');
        $produit4->setImage('images/cafetiere-piston');
        $produit4->setStock('200');
        $manager -> persist($produit2); 


        $produit5 = new Produit();
        $produit5->setNom('cuillère à café');
        $produit5->setDescription('Cette cuillère vous servira à doser votre cofé pour le préparer avec soin');
        $produit5->setImage('public/images/cuillere-mesure.webp');
        $produit5->setStock('350');
        $manager -> persist($produit1); 
        $Commentaire3 = new Commentaire();
        $Commentaire3 -> setTitre('Simple d\utilisation !');
        $Commentaire3 -> setContenue('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum, turpis vel tempus dignissim, nisl mauris lacinia eros, ut mattis odio lorem eget magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus nec pharetra lectus.');
        $Commentaire1 -> setProduit($produit2);
        $manager -> persist($Commentaire2); 

        $manager -> flush();
        


        


}

}