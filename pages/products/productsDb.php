<?php 
$product =   array(
        'id'=>1111, 'title'=>  "1 Smart Phone V1",
        'price' =>  102323, 
        'rating' => 2,
        'img'    => 'product1.jpg', 
        'qty'=> 5,  'description' => 'Turquoise Tassel Necklace in Silver with Grey Druzy. Long Turquoise Tassel Druzy                                             Necklace in Silver. Long Bohemian Style Tasssel Necklace.' );
for($i=0; $i<=20; $i++): 

    $product['id'] = $i; 
    $product['price'] = rand(100, 9999); 
    $product['rating'] = rand(1, 5);
    if($i<3)
    {
        $product['discount'] = rand(20, 80); 
    }
    else 
    {
        $product['discount'] = 0; 
    }
    
    $products[$i] = $product;


endfor;


